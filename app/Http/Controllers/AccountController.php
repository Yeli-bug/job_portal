<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    //Este metodo muestra la pg de registro de usuarios
    public function registration() {
        return view('front.account.registration');
    } 

//este metodo registra un usuario
public function processRegistration(Request $request) {
    $validator = Validator::make($request->all(),[
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:5|same:confirm_password',
        'confirm_password' => 'required',
    ]);

    if ($validator->passes()){

    } else {
        return response()->json([
            'status' => false,
            'errors' => $validator->errors()
        ]);
    }
} 

    //este metodo muestra la pg de inicio de sesion
    public function login() {

    } 

}
