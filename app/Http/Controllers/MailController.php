<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendWelcomeEmail()
    {
        $user = User::find(1); // Replace 1 with the user ID you want to send the welcome email to

        // Send the email using the custom WelcomeEmail class
        Mail::to($user->email)->send(new WelcomeMail($user));

        return 'Welcome email sent successfully!';
    }

    public function OrderPlaced()
    {
        $user = User::find(1); // Replace 1 with the user ID you want to send the welcome email to

        // Send the email using the custom WelcomeEmail class
        Mail::to($user->email)->send(new OrderPlaced($user));

        return 'Welcome email sent successfully!';
    }
}
