<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //

    public function loginform()
    {
        return view('login');
    }

    public function registrationform()
    {
        return view('registration');
    }

    public function login(Request $request)
    {
        $isValidUser = Auth::attempt($request->input('mobile'), $request->input('password'));

        if ($isValidUser === 1) {
            return "valid user";
        }
        return "incorrect password";
    }

    public function getRemainingBalance($userId = "")
    {
        return 20000;
    }
}
