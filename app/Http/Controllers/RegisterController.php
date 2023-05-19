<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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

        //Modificando el Request
        $request->request->add(['username' => Str::slug($request->username)]);

        //Validacion
        $this->validate($request, [
            'name' =>     'required|string|min:3|max:30',
            'username' => 'required|unique:users|string|min:3|max:20',
            'email' =>    'required|unique:users|email|min:3|max:60',
            'password' => 'required|min:6|max:10|confirmed',
        ]);

        // dd('Creando Usuario');
        //lower
        //slug

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make( $request->password)
        ]);


    }

}
