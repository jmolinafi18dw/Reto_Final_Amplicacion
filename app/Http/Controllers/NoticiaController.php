<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticia;

class NoticiaController extends Controller
{
    public function index(){
      $noticias = Noticia::all();
      $todos = true;
      return view('layouts.user.noticias')-> with('noticias', $noticias)-> with('todos' , $todos);
      
    }
}
