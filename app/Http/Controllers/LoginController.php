<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function lamanLogin()
    {
        return view('login.index');
    }
}
