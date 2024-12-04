<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimerControlador extends Controller
{
    //Primer método
    function index(){
        $posts = ['post1','post2'];
        //return view('contact', ['posts'=>$posts]);

        return view('contact', compact('posts'));

        //return view('contact', ['name' => 'Andres']);
    }
    
    function otro($post=5, $post2=10){
        echo $post;
        echo $post2;
    }

}
