<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Handle the form submission
        // Save to the database or send an email
        return redirect('/contact')->with('success', 'Message sent successfully!');
    }
}
