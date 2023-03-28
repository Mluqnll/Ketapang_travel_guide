<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;


class AuthController extends Controller
{

    public function login(){
        return View ('login');
    }


    public function loginProcess(){
        if (auth()->attempt(['username' => request('username'), 'password' => request('password')])) {
            return redirect('admin')->with('success', 'Selamat Datang');
        }

        return redirect('login');
    }

    public function logout(){
        auth()->logout();
        return redirect('/');
    }

   
}