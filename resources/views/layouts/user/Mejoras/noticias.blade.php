@extends('layouts.app')
@section('content')
<br>
<div class="container">
    <h1 class="text-center">Sección de Noticias</h1>
    <br>

<div class="row row-cols-1 row-cols-md-3 ">
    @foreach ($noticias as $noticia)

    <div class="col-4 mb-4">
        <div class="card h-100">
          <img src="{{$noticia->link_imagen}}" class="card-img-top" height="55%" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{$noticia->titulo}}</h5>
      <p class="card-text">{{$noticia->contenido}}</p>
    </div>
    <div class="card-footer text-muted">Publicado por: {{$noticia->sociedad->nombre}}</div>
    <div class="card-footer text-muted">Fecha de Publicación: {{$noticia->created_at->isoFormat('D-M-Y')}}
    </div>
        </div>
      </div>
      @endforeach
  </div>

  </div>


</div>
@endsection
