<?php

namespace App\Http\Controllers;

use app\Models\Form;
use Illuminate\Http\Request;


class ValidacionController extends Controller
{
    public function index(Request $request){
        return view ('formhtml');
    }

    public function guardar(Request $request){
        $request -> validate([
            'nombre'=> 'required',
            'email'=> 'required | email | unique:forms',
            'edad'=> 'required | numeric',
            'contraseña'=> 'required | confirmed',
            'contraseña_confirmation'=> 'required',
        ]);
        $form = new Form;
        $form = nombre =$request ->nombre;
        $form = email =$request ->email;
        $form = edad =$request ->edad;
        $form = contraseña =$request ->contraseña;
        $form = contraseña_confirmation =$request ->contraseña_confirmation;

        $form ->save();
        return back()->with('success','ValidacionExitosa');
    }
    }
