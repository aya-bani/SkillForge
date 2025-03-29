<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User ;
use Illuminate\Support\facades\Hash ;
class UserAuthController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register'); 
    }
    
    public function showLoginForm()
    {
        return view('auth.login'); 
    }
    public function register(Request $request){
        
        $registerUserData = $request->validate([
            'name'=>'required|string',
            'email'=>'required|string|email|unique:users',
            'password'=>'required|min:8'
        ]);

        $user = User::create([
            'name' => $registerUserData['name'],
            'email' => $registerUserData['email'],
            'password' => Hash::make($registerUserData['password']),
        ]);

        return response()->json([
            'message' => 'User Created ',
        ]);
    }

    public function login(Request $request){
        $loginUserData = $request->validate([
            'email'=>'required|string|email',
            'password'=>'required|min:8'
        ]);

        $user = User::where('email',$loginUserData['email'])->first();
        if(!$user || !Hash::check($loginUserData['password'],$user->password)){
            return response()->json([
                'message' => 'Invalid Credentials'
            ],401);
        }

        $token = $user->createToken($user->name.'-AuthToken')->plainTextToken;
        return response()->json([
            'access_token' => $token,
        ]);
    }

    public function logout(Request $request)
    {
        // Check if the user is authenticated
        if ($request->user()) {
            $request->user()->currentAccessToken()->delete();
        }
    
        // Log out the user and invalidate the session
        // auth()->logout();
    
        // Redirect to the login page with a success message
        return redirect('/login')->with('message', 'Logged out successfully');
    }
    
    
    

    
}
