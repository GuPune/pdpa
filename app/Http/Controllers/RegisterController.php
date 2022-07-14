<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;



class RegisterController extends Controller
{
    //

    public function show()
    {
        return view('auth.register');
    }

    /**
     * Handle account registration request
     *
     * @param RegisterRequest $request
     *
     * @return \Illuminate\Http\Response
     */


    public function checkemail(Request $request)
    {


$checkmail = User::where('email',$request->email)->first();

if($checkmail){
    return response()->json([
        'data' => false,
    ]);

}else {
    return response()->json([
        'data' => true,
    ]);

}




    }
}
