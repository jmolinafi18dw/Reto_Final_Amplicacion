@extends('layouts.index')
@section('content')
<br><br>
<!-- Perfil de usuario -->
<div class="container">
  <div class="row p-5">
    <div class="col-12 col-md-6 col-lg-6 justify-conten-center mt-5">
      <div class="card asaa" style="width: 18rem;">
        <img src="/assets/img/profile.jpg" class="card-img-top" alt="fotoPerfil">
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-6">
      <div class="">
        <div class="">
          <h1 class="mb-5">{{ __('multi.ifopersonal') }}</h1>
          <form class="form-group">
            <div class="d-flex form-group justify-content-around">
              <label for="exampleInputEmail1">{{ __('multi.nomform') }}</label>
              <input type="text" class="form-control" style="width: 300px;" readonly value="{{$user->nombre}}">
            </div>
            <div class="d-flex form-group justify-content-around">
              <label for="exampleInputEmail1">{{ __('multi.apellidoform') }}</label>
              <input type="text" class="form-control" style="width: 300px;" readonly value="{{$user->apellido}}">
            </div>
            <div class="d-flex form-group justify-content-around">
                <label for="exampleInputEmail1">{{ __('multi.telform') }}</label>
                <input type="email" class="form-control" style="width: 300px;" readonly value="{{$user->telefono}}">
            </div>
            <div class="d-flex form-group justify-content-around">
              <label for="exampleInputEmail1">{{ __('multi.emailform') }}</label>
              <input type="email" class="form-control" style="width: 300px;" readonly value="{{$user->email}}">
            </div>
          </form>
        </div>
      </div>
    </div>
    </div>
    <div class="text-center mb-5">
      <hr class="m-5">
      <div class="">
        <h1 class="mb-5">{{ __('multi.suscrippersonal') }}</h1>
        <ul class="list-group">
          @foreach($sociedades as $sociedad)
          @if(($sociedad->id===2)|($sociedad->id===3))
          <li class="list-group-item d-flex justify-content-between align-items-center">
            {{$sociedad->nombre}}
          </li>
          @endif
          @endforeach
        </ul>
      </div>
    </div>
</div>

@endsection
