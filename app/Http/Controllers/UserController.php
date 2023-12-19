<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function register(Request $request)
    {
        // Validation
        $validated = $request->validate([
            'username' => 'required|unique:users',
            'password' => 'required|min:8',
        ]);

        $user = new User();
        $user->username = $request->input('username');
        $user->password = $request->input('password');
        
        $user->save();

        return redirect()->route('homepage')->with('Success', true);
    }

    public function login(Request $request): RedirectResponse
    {
        // Validate input
        $validation = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($validation)) {
            $request->session()->regenerate();
 
            return redirect()->intended('home');
        }
 
        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ])->onlyInput('username');
        

        // // Search username
        // $user = User::where('username', $request->input('username'))->first();

        // // Verification
        // if($user && Hash::check($request->input('password'), $user->password)){
        //     session(['user_id' => $user->id]);

        //     return redirect()->route('homepage');
        // } else {
        //     //error if data is invalid
        //     return redirect()->route('login')->with('error', 'Invalid username or password');
        // }
    }
}
