<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    public function login(){
        return view('auth.login');
        }
    
    public function Registration(){
        return view('auth.registration');
    }
}
