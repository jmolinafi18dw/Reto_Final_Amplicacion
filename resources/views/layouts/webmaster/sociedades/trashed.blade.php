@extends('layouts.webmaster.WMView')

@section('webmasterContent')
<!-- Content Row -->

<div class="row">
  <div class="col-xl-12 col-lg-7">
    <table class="table">
        <thead>
            <tr>
                <th>ID Usuario</th>
                <th>Nombre</th>
                <th>Ubicacion</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>Habilitar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($soci as $sociedad)
                <tr>
                    <td>{!! $sociedad->id !!}</td>
                    <td>{!! $sociedad->sociedades->nombre !!}</td>
                    <td>{!! $sociedad->sociedades->ubicacion !!}</td>
                    <td>{!! $sociedad->telefono !!}</td>
                    <td>{!! $sociedad->email !!}</td>
                    <td><a href="/webmaster/sociRestore/{{$sociedad->id}}"><i class="fa fa-toggle-on" style="color:black"></i></a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
  </div>
</div>
@endsection
