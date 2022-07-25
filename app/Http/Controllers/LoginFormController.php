<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginFormController extends Controller
{
    //


    public function showAdminLoginForm()
    {

  return view('auth.login');
    }
}
