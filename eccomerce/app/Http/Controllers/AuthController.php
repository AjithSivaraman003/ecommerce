<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Hash;
use Session;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $user = User::create([

            'name' => $request->name,

            'email' => $request->email,

            'address' => $request->address,

            'password' => Hash::make($request->password)

        ]);

        // Session
        Session::put('user_id', $user->id);

        Session::put('user_name', $user->name);

        return redirect('/login');

    }

    public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {

        return redirect('/productpage');

    } else {

        return back()->with('error', 'Invalid Email or Password');

    }
}

public function logout()
{
    Auth::logout();

    return redirect('/login');
}


}