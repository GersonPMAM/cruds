<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostPost;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        //definiendo una variable post que es lo que recibe el index, para ordenaralo, el primer campo es el para metro y el segundo es como, para cambiar pagina cursorpagenate y el 5 define los datos a ver, el echo view es para in vocar y lo de corchetes es mandarle es un arreglo que contiene los datos, el $ es la variable.
        $posts=Post::orderBy('created_at','desc')->cursorpaginate(5);    
        echo view ('dashboard.post.index',['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo view ('dashboard.post.create',['post'=>new post()]);
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostPost $request)
    {
       /*  $request->validate([
            
           
        ]); */
        /* dd($request->validated());
        echo "Valdacion".$request->title; */
        echo "El titulo trae ".$request->title;
        Post::create($request->validated());
        /* Para limpiar */
        /* return back(); */
        /* Primero la ubicacion y apunta a una nueva funcion si la secion esta activa*/
        /* return redirect('post.create')->with('status','Post created'); */
        return back()->with('status','Muchas gracias su post fue creado con exito');
        /* pagina regresa solo a la pagina pero cuando apunta a un with  */
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        echo view ('dashboard.post.show',["post" =>$post]);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
        echo view('dashboard.post.edit',['post'=> $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(StorePostPost $request, Post $post)
    {
        //
        $post->update($request->validated());
        return back()->with('status','Muchas gracias tu post fue actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
        $post->delete();
        return back()->with('status','Post Borrado con exito');
    }
}
