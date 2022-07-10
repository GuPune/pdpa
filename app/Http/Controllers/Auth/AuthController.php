<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    //

    public function redirectToProvider(Request $request)
	{
		return Socialite::driver('line')->redirect();
	}
}
