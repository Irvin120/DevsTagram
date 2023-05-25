<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //validacion del usuario autentificado, tienen que haber un usuario autentificado de lo contrario no funcionara

    public function __construct(){
        $this->middleware('auth');
    }


    public function index()
    {
        return view('layouts.dashboard');
    }
}
