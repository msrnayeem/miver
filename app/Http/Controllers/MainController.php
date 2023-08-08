<?php

namespace App\Http\Controllers;

use App\Models\History;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class MainController extends Controller
{
    public function notification()
    {
        return view('layouts.n');
    }

    public function index()
    {
        return view('pages.index');
    }

    public function profilePic(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = session()->get('id').'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);

            return redirect()->back()->withErrors(['image' => 'Image uploaded successfully.']);
        }

        return redirect()->back()->withErrors(['image' => 'No image selected.']);
    }

    public function loginSubmitted(Request $request)
    {
        $email = $request->input('signInemail');
        $password = $request->input('signInpassword');

        $user = User::where('email', $email)->first();

        if (! $user) {
            return 'no found';
        }

        
        if (! Hash::check($password, $user->password)) {
            History::create([
                'user_id' => $user->id,
                'action' => 'login attempt',
                'description' => 'user tried with wrong password.',
            ]);
            return 'Wrong credentials';
        }
        if($user->is_admin == 1){
            $request->session()->put('admin', $user->is_admin);
        }

        if($user->is_active == 0){
            return 'Blocked user, please contact with support';
        }

        $request->session()->put('name', $user->name);
        $request->session()->put('id', $user->id);

        History::create([
            'user_id' => $user->id,
            'action' => session()->get('id') == 1 ? 'admin_login' : 'user_login',
            'description' => session()->get('id') == 1 ? 'admin_login successfully logged in' : 'user_login successfully logged in',
        ]);

        return 'done';
    }

    public function signupSubmitted(Request $request)
    {
        $email = $request->input('signUpemail');
        $password = $request->input('signUppassword');

        // Check if user with the same email already exists
        $existingUser = User::where('email', $email)->first();
        if ($existingUser) {
            return response()->json(['success' => false, 'message' => 'User with the same email already exists.']);
        }

        // Insert into user table
        $user = new User;
        $user->username = $email;
        $user->email = $email;
        $user->password = Hash::make($password);
        $user->profile_info = 'I am a professional freelancer.';
        $user->save();

        
        // Check if user information is successfully saved
        if ($user->id) {
            History::create([
                'user_id' => $user->id,
                'action' => 'user_signup',
                'description' => 'user successfully signed up',
            ]);

            return response()->json(['success' => true, 'message' => 'User successfully registered.']);
        } else {
            //create history
            History::create([
                'user_id' => null,
                'action' => 'user_signup',
                'description' => 'user failed to sign up',
            ]);
            return response()->json(['success' => false, 'message' => 'Failed to save user information.']);
        }
    }

    //logout
    public function logout()
    {
        History::create([
            'user_id' => session()->get('id'),
            'action' => session()->get('id') == 1 ? 'admin_logout' : 'user_logout',
            'description' => session()->get('id') == 1 ? 'admin_login successfully logged out' : 'user_login successfully logged out',
        ]);
        
        Session::flush();


        return response()->json(['success' => true]);
    }
}
