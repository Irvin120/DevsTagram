<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //validacion del usuario autentificado, tienen que haber un usuario autentificado de lo contrario no funcionara

    public function __construct(){
        $this->middleware('auth');
    }


    public function index(User $user)
    {
        // dd($user->username);
        return view('layouts.dashboard', [
            'user' => $user
        ] );
    }

    public function create(){

        return view('posts.create');
    }
}
