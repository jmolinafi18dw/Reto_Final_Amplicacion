@extends('layouts.index')
@section('content')
<br><br><br><br><br>
<div id="sensible2" class="container">
  <div class="d-flex text-center flex-wrap justify-content-center">
    <div class="col-12 col-md-6 col-lg-6">
      <h1>{{ __('multi.plano') }}</h1>
      <div class="mb-5 mt-5">
        <img class="planos" src="{{$sociedad->link_plano}}" alt="plano_sociedad">
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-6 mb-5">
      <h1>{{ __('multi.reservafecha') }}</h1>
      <form class="mt-5 mr-5" action="{{ route('sociedad.reservaFecha',$sociedad -> id) }}" method="get">
        @csrf
        @if(isset($fechaEditar))
        <div class="input-group mb-3">
          <div class="input-group-prepend border">
            <span class="input-group-text" id="basic-addon1">Fecha</span>
          </div>
          <input type="date" name="fecha" value="{{$fechaEditar }}" class="form-control border" placeholder="Fecha">
        </div>


        @else
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">Fecha</span>
          </div>
          <input type="date" name="fecha" class="form-control" placeholder="Fecha">
        </div>
        @endif
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">{{ __('multi.tipo') }}</label>
          </div>
          <select id="tipo" class="custom-select" name="tipo">
            <option value="..." selected>Elige...</option>
            @if($tipo)
            @foreach($tipo as $comida)
            @if(($tipoEditar->id ?? '') === $comida->id)
            <option value="{{$comida -> id}}" selected>{{$comida -> nombre}}</option>
            continue
            @endif
            @if( $comida->id != ($tipoEditar->id ?? ''))
            <option value="{{$comida -> id}}">{{$comida -> nombre}}</option>
            @endif
            @endforeach
            @endif
          </select>
        </div>
        <button id="accion2" type="submit" class="btn btn-primary reserva">{{ __('multi.mesa') }}</button>
        @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif
      </form>
    </div>
  </div>
  <script>
    $('#sensible2').hover(function(){
      if ($('#tipo option:selected').text() === 'Elige...') {
        $('#accion2').attr('disabled', 'disabled');
      } else {
        $('#accion2').removeAttr('disabled');
      }
    });
  </script>
</div>
@endsection
