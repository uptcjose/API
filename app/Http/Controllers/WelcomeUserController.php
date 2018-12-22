<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
   public function __invoke ($name,$nickname=null){
   	$name=ucfirst($name);
   	$Title="Saludo Usuarios";
   	$saludo="Bienvenido {$name}, su apellido es {$nickname}";
   	if($nickname){
   		return view ('saludoUsers',compact('Title','saludo'));
   	}else{
   		return view  ('saludoUsers',compact('Title','saludo'));


   	}
   }
}
