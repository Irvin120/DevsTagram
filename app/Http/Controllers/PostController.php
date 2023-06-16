<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //validacion del usuario autentificado, tienen que haber un usuario autentificado de lo contrario no funcionara

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(User $user)
    {
        // dd($user->username);
        return view('layouts.dashboard', [
            'user' => $user
        ]);
    }

    public function create()
    {

        return view('posts.create');
    }

    public function store(Request $request)
    {
        // dd('creando publicacion');

        $this->validate($request, [
            'titulo' => 'required|max:200',
            'descripcion' => 'required',
            'imagen' => 'required',
        ]);

        //FORMA 1
        // Post::create([
        //     'titulo' => $request->titulo,
        //     'descripcion' => $request->descripcion,
        //     'imagen' => $request->imagen,
        //     'user_id' => auth()->user()->id
        // ]);


        //FORMA 2
        $post = new Post;
        $post->titulo = $request->input('titulo');
        $post->descripcion = $request->input('descripcion');
        $post->imagen = $request->imagen;
        $post->user_id = auth()->user()->id;
        $post->save();

        return redirect()->route('posts.index', auth()->user()->username);
    }
}
