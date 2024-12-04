<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SegundoControlador extends Controller
{
    //Primer método
    function index(){
        return view('contact', ['name' => 'Andres']);
    }
    function index2(){
        return view('contact', ['name' => 'Andres']);
    }
    function index3(){
        return view('contact', ['name' => 'Andres']);
    }
}
