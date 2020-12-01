<?php

namespace App\Http\Controllers;

use App\Message;
use App\User;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function Chat()
    {
        $mensajes=Message::all();
        $users=User::all();

        return view('layouts.user.Lineas.chat')->with('mensajes', $mensajes)->with('users', $users);
    }

    // public function incidenciaIndex()
    // {
    //     $user = Auth::user();
    //     $sociedad = Sociedad::where('administrador_id', $user->id)->first();
    //     $incidencias = Incidencia::where('sociedad_id', $sociedad->id)->where('estado', 'pendiente')->get();
    //     $tipo = 1;
    //     return view('layouts.admin.incidencias.index')->with('sociedad', $sociedad)->with('incidencias', $incidencias)->with('tipo', $tipo);
    // }
}
