<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;
use App\Models\User; 

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    // Handle the registration form submission
    public function store(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', Password::min(6)->letters()->mixedCase()->numbers()->symbols(), 'confirmed'],
        ]);

        // Create the user and hash the password
        $user = User::create([
            'firstname' => $validatedData['firstname'],
            'lastname' => $validatedData['lastname'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);

        // Log the user in
        Auth::login($user); 

        // Redirect to a dashboard or some other page
        return redirect()->route('')->with('success', 'Registration successful. You are now logged in.');
    }
}
