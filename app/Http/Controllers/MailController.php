<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;
use App\Models\User;

class MailController extends Controller
{
    public function sendWelcomeEmail()
    {
        $user = User::find(1); // Replace 1 with the user ID you want to send the welcome email to

        // Send the email using the custom WelcomeEmail class
        Mail::to($user->email)->send(new WelcomeMail($user));

        return "Welcome email sent successfully!";
    }
}
