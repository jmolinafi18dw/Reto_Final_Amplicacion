@extends('layouts.app')
@section('content')
    <div class="container p-0 mb-0">
        <h1 class="text-center mt-4 mb-2">Sección de Noticias</h1>
        <div class="row row-cols-1 row-cols-md-0">
        @foreach ($noticias as $noticia)
        <div class="col-12 col-xs-12 col-md-6 col-lg-4 col-xl-4 mb-4">
            <div class="card h-100">
                <img src="{{$noticia->link_imagen}}" class="card-img-top" height="50%" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$noticia->titulo}}</h5>
                <p class="card-text">{{$noticia->contenido}}</p>
            </div>
            <div class="card-footer text-muted d-flex flex-row">
                <img src="{{$noticia->sociedad->link_imagen}}" class="rounded-circle mr-3" height="30px" width="30px" alt="avatar">
                <p><a href="{{ route('sociedad.info',$noticia->sociedad->id) }}">{{$noticia->sociedad->nombre}}</a></p>
                <p class="card-text">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="far fa-clock pr-2"></i>{{$noticia->created_at->isoFormat('D-M-Y')}}</p>
            </div>
            </div>
        </div>
        @endforeach
        </div>
    </div>
@endsection
