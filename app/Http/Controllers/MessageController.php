<?php

namespace App\Http\Controllers;

use App\Message;
use App\UsuarioSociedad;
use App\User;
use Illuminate\Http\Request;
use Auth;


class MessageController extends Controller
{
    public function Chat($id)
    {
        $logeado = Auth::user();
        $mensajes=Message::where('sociedad_id', $id)->get();
        $sociedadusers=UsuarioSociedad::where('sociedad_id', $id)->get();


        return view('layouts.user.Mejoras.chat')
        ->with('mensajes', $mensajes)
        ->with('logeado', $logeado)
        ->with('sociedadusers',$sociedadusers);
    }

}
