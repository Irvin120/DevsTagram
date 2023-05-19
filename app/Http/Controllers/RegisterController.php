<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // dd($request); day end don
        // dd($request->get('email'));

        //Validacion
        $this->validate($request, [
            'name' =>     'required|string|min:3|max:30',
            'username' => 'required|unique:users|string|min:3|max:20',
            'email' =>    'required|unique:users|email|min:3|max:60',
            'password' => 'required|min:6|max:10|confirmed',
        ]);

        dd('Creando Usuario');


    }

}
