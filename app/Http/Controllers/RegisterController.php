<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register', [
            'title' => 'Register Page',
            'active' => 'Login'
        ]);
    }
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'max:255'],
            'username' => ['required', 'min:5', 'max:255', 'unique:users'],
            'email' => ['required', 'email:dns', 'max:255', 'unique:users'],
            'password' => ['required', 'min:6', 'max:255']
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        return redirect('/login');

    }
}
