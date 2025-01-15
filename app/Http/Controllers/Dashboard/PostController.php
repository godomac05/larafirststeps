<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // return response()->json([
        //     'name' => 'Abigail',
        //     'state' => 'CA'
        // ]);

        //En el modelo (Post.php) se deifinen los campos a utilizar en el Insert -- Se CREA mediante el modelo
        // $post = Post::create(
        //     [
        //         'title' => 'test title',
        //         'slug' => 'test slug',
        //         'content' => 'test content',
        //         'category_id' => 1,
        //         'description' => 'test description',
        //         'posted' => 'not',
        //         'image' => 'test image'
        //     ]
        // );





        // Post es el objeto - El Modelo (la tabla)
        //find traduce la consulta sql para ejecutar y lo traduce a un objeto -- Se ACTUALIZA mediante el MODELO
        //$post = Post::find(1);

        //dd($post); 
        //Asi con dd puede retornar el objeto comleto, agregando la varaible $post como en el UPDATE

        // $post = $post->update(
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
        // $post  = Post::find(5);
        // $post->delete();

        //dd($post);

        $post = Post::find(1);
        $category = Category::find(1);
        //dd($category->posts[1]->title);
        //dd($post->category);

        
        return 'Index PostController';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Pasar categorias de la Base de Datos
        //Get Obtiene todo
        //$categories = Category::get(); 
        //Pluck Obtiene solo los campos indicados
        $categories = Category::pluck('id','title');
        //dd($categories);

        return view('dashboard.post.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Emplea funcion de ayuda del Framework
        //dd(request()->get('title'));
        //Corresponde a la varaible de la funcion
        //dd($request->all()['title']);
        //dd($request->all());

        // Post::create(
        //          [
        //             'title' => $request->all()['title'],
        //             'slug' => $request->all()['slug'],
        //             'content' => $request->all()['content'],
        //             'category_id' => $request->all()['category_id'],
        //             'description' => $request->all()['description'],
        //             'posted' => $request->all()['posted']
        //             //'image' => $request->all()['image']
        //          ]
        //      );


        Post::create($request->all());

        return to_route('post.index');


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
