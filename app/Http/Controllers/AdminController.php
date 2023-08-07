<?php

namespace App\Http\Controllers;
Use App\Models\User;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('pages.admin.admin-home');
    }

    public function userList()
    {
        $users = User::select('id', 'name', 'email', 'registration_date', 'is_active')->get();

        return view('pages.admin.user-list', compact('users'));
    }
}
