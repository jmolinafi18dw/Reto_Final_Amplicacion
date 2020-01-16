@extends('layouts.index')
@section('content')
<br><br><br><br><br>
<!-- vista información sociedad -->
<div class="d-flex flex-wrap text-center">
  <div class="d-flex text-center mb-5 ml-5">
    <div class="m-2" style="width: 50rem;">
      <a href="#"><img src="{{secure_asset('assets/img/Gaztelubide.jpeg')}}" class="card-img-top" alt="..."></a>
    </div>
  </div>
  <div class="container">
    @if($sociedad)
      <h1>{{$sociedad -> nombre}}</h1>
      <p>{{$sociedad -> descripcion}}</p>
      <div class="mapaSociedad">
          <h2>{{ __('multi.localiza') }}</h2>
          <h5>{{$sociedad -> ubicacion}}</h5>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13810.649339936816!2d-1.986587800278839!3d43.307321967731774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd51affe3b68fe15%3A0xe43ec55994864649!2zU2FuIFNlYmFzdGnDoW4sIEd1aXDDunpjb2E!5e0!3m2!1ses!2ses!4v1574411863455!5m2!1ses!2ses" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </div>
      <!-- aparece si esta suscrito -->
      @if ($suscrito)
        <a class="btn btn-primary btn-lg mb-5" href="{{ route('sociedad.reserva',$sociedad -> id) }}" role="button">Reserva</a>
      @else
        <a class="btn btn-primary btn-lg mb-5" href="{{ route('sociedad.peticion',$sociedad -> id) }}" role="button">Suscribirse</a>
      @endif
    @endif
  </div>
</div>

@endsection
