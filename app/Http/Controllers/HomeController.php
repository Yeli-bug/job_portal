<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Este metodo muestra la pagina de inicio "1"
    public function index(){
        return view('front.home');
    }
}
