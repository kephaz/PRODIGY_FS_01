<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    public function login(){
        return "Login";
        }
    
    public function Registration(){
        return "Registration";
    }
}
