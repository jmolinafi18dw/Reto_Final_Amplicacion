<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticia;

class NewController extends Controller
{
    public function Index()
    {
        // $logeado = Auth::user();
        // $mensajes=Message::where('sociedad_id', 2)->get();
        // $sociedadusers=UsuarioSociedad::where('sociedad_id', 2)->get();
        $noticias=Noticia::all();

        return view('layouts.user.Mejoras.noticias')->with('noticias',$noticias);
    }
}
