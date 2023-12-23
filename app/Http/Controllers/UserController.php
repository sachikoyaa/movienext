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

        return redirect()->route('login');
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
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('login');
    }
}
