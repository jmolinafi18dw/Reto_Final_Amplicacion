<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Sociedad;
use App\Producto;
use App\Linea;
use App\Factura;
use App\ProductoSociedad;
use App\Reserva;
use App\TipoReserva;

class LineaController extends Controller
{
  public function __construct()
  {
   $this->middleware('role:3');
  }
  public function index($factura_id){
    $user = Auth::user();
    $factura = Factura::find($factura_id);
    $denegado = Reserva::where('id',$factura->reserva_id)->where('usuario_id',$user->id)->get();
    $sociedad = Sociedad::find($factura->sociedad_id);
    if (count($denegado) === 1) {
      return view('layouts.user.Lineas.show')-> with('factura' , $factura)-> with('sociedad' , $sociedad)-> with('user' , $user);
    }else {
      return redirect('/denegado');
    }
  }
}