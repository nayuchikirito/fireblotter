<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;

class RegisteredUserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users', compact('users'));
    }
    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        $validatedAttributes = request()->validate([
            'username'  => ['required', 'string', 'min:3', 'max:50'],
            'email'     => ['required', 'email', 'max:254', 'unique:users,email'],
            'user_role' => ['required', 'string'],
            'password'  => ['required', Password::min(8)->letters()->numbers(), 'confirmed']
        ]);

        $user = User::create($validatedAttributes);

        // Auth::login($user);

        return redirect('/users');
    }
}
