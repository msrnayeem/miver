<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Session;

class MainController extends Controller
{
    public function index()
    {
        return view('pages.user.index');
    }
    public function profile()
    {
        if(session()->has('user_name')){
            return view('pages.user.profile');
        }
        else{
            return redirect()->route('index');
        }
       
    }
    public function profilePic(Request $request){
        $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = session()->get('id'). '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);

           //if file exists than overwrite
           
            // return riderct with msg
            
            return redirect()->back()->withErrors(['image' => 'Image uploaded successfully.']);
        }
    

        return redirect()->back()->withErrors(['image' => 'No image selected.']);
    }

    public function loginSubmitted(Request $request)
    {
        $email = $request->signInemail;
        $password = $request->signInpassword;
    
        // Assuming you have a "User" model with an "email" column
        $user = User::where('email', $email)->first();
    
        if (!$user) {
            return response()->json([ [1] ]);
        }
    
        // Assuming the password is stored as a hash in the "password" column
        if (!Hash::check($password, $user->password)) {
            return response()->json([ [2] ]);
        }
    
        // Set session
        $request->session()->put('user_name', $user->username);
        $request->session()->put('id', $user->id);
    
        return response()->json([ [3] ]);
    }
    
    //logout
    public function logout()
    {
        //Session::forget('user_name');
         Session::flush();

        return redirect()->route('index');
    }
}
