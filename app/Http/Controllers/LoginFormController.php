<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginFormController extends Controller
{
    //


    public function showAdminLoginForm()
    {


        $admin = Auth::guard('admin')->user();


if($admin){

    return view('cms/home');
}else {
    return view('auth.login');

}

    }
}
