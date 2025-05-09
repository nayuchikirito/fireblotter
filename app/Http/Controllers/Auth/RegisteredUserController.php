<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisteredUserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.users', compact('users'));
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
            'user_role' => ['required', 'integer'],
            'password'  => ['required', Password::min(5)->letters()->numbers(), 'confirmed']
        ]);

        $user = User::create($validatedAttributes);

        // Auth::login($user);

        return redirect()->route('users.index');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id); // Will throw 404 if not found

        return view('users.edit', compact('user'));
    }


    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $validatedAttributes = $request->validate([
            'username'  => ['required', 'string', 'min:3', 'max:50'],
            'email'     => ['required', 'email', 'max:254', 'unique:users,email,' . $user->id],
            'user_role' => ['required', 'integer'],
            'password'  => ['required', Password::min(5)->letters()->numbers(), 'confirmed'],
        ]);

        $validatedAttributes['password'] = Hash::make($validatedAttributes['password']);

        $user->update($validatedAttributes);

        // return response()->json(['message' => 'User updated successfully']);

        return back()->with('success', 'User updated successfully');

    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('users.index');
    }


}
