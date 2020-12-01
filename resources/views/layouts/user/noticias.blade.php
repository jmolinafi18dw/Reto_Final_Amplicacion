@extends('layouts.app')
@section('content')
<div class="container">
	<div class="d-flex justify-content-center mt-3">
		<h1>Noticias</h1>
	</div>
</div>
<div class="row">
	@foreach($noticias as $noticia)
	<div class="card col-4" style="width: 18rem;">
	  <div class="card-body">
	    <h5 class="card-title">{{$noticia->titulo}}</h5>
	    <h6 class="card-subtitle mb-2 text-muted">{{$noticia->fecha}}</h6>
	    <p class="card-text">{{$noticia->descripcion}}</p>
	  </div>
	</div>
	@endforeach
</div>


@endsection
