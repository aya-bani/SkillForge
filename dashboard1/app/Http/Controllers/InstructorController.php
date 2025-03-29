<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instructor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class InstructorController extends Controller
{
    /**
     * Show the form for editing the instructor's profile.
     */
    public function edit()
    {
        // Assuming you have authentication set up and the instructor is logged in
        $instructor = Auth::user();

        return view('instructor.edit-profile', compact('instructor'));
    }

    /**
     * Update the instructor's profile.
     */
    public function update(Request $request)
    {
        // Get the currently authenticated instructor
        $instructor = Auth::user();

        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:instructors,email,' . $instructor->id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        // Update the instructor's name and email
        $instructor->name = $request->name;
        $instructor->email = $request->email;

        // If the password field is filled out, update the password
        if ($request->filled('password')) {
            $instructor->password = Hash::make($request->password);
        }

        // Save the changes to the instructor
        // $instructor->save();

        // Redirect back to the profile edit page with a success message
        return redirect()->route('instructor.edit')->with('success', 'Profile updated successfully.');
    }
}
