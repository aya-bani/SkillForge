<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        // Validate the request
        $attributes = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8'],
        ]);

        // Attempt to authenticate the user
        if (! Auth::attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'Invalid credentials',
            ]);
        }

        // Regenerate the session to prevent fixation attacks
        $request->session()->regenerate();

        // Redirect to the intended page or dashboard
        return redirect('/dashboard');
    }
}
