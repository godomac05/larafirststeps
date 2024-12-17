<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //En el modelo (Post.php) se deifinen los campos a utilizar en el Insert -- Se CREA mediante el modelo
        /*$post = Post::create(
            [
                'title' => 'test title',
                'slug' => 'test slug',
                'content' => 'test content',
                'category_id' => 1,
                'description' => 'test description',
                'posted' => 'not',
                'image' => 'test image'
            ]
        );*/





        // Post es el objeto - El Modelo (la tabla)
        //find traduce la consulta sql para ejecutar y lo traduce a un objeto -- Se ACTUALIZA mediante el MODELO
        //$post = Post::find(1);

        //dd($post);

        // $post->update(
        //     [
        //         'title' => 'test title new',
        //         'slug' => 'test slug new',
        //         'content' => 'test content new',
        //         'description' => 'test description new',
        //         'image' => 'test image'
        //     ]
        // );


        //dd($post);
        //dd($post->title);

        

        //Se ELIMINARA mediante el objeto 
        $post  = Post::find(5);
        $post->delete();

        
        return 'Index';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
