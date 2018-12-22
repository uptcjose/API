<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
    return "hola";	
    }
     public function usuarios(){
        if (request()->has('empty')) {
           $usuarios=[];
        }else {
     	$usuarios=[
     		'jose',
     		'leonel',
     		'alex',
     		'<script>alert("clicker")</script>'

     	];
     }
     	$Title="listado de usuarios";
    return view('users',compact('Title','usuarios'));
    	
    }

    public function show($id){
        $Title="detalle de usuarios";
        $id="Bienvenido {$id}";
return view('detalleUsers', compact('Title','id'));
	
    }
     public function nuevoUsuario(){
    return "nuevo usuario";
	
    }
}
