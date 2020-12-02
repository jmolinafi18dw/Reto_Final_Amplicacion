<?php

namespace App\Http\Controllers;

use App\Message;
use App\UsuarioSociedad;
use App\User;
use Illuminate\Http\Request;
use Auth;


class MessageController extends Controller
{
    public function Chat()
    {
        $logeado = Auth::user();
        $mensajes=Message::where('sociedad_id', 2)->get();
        $sociedadusers=UsuarioSociedad::where('sociedad_id', 2)->get();


        return view('layouts.user.Mejoras.chat')->with('mensajes', $mensajes)->with('logeado', $logeado)->with('sociedadusers',$sociedadusers);
    }

}
