@extends('layouts.app')
@section('content')
<script src="/assets/js/jquery-3.4.1.min.js"></script>

<!-- Content Row -->
<script src="/assets/js/validacion_linea.js"></script>
<br><br><br><br>
<div class="container">
    <div class="row">
        <div class="col-xl-4 col-lg-7">
            <h3>Listado Stock</h3>
            <table class="table table-striped">
                <tr>
                    <th>Id</th>
                    <th>{{ __('multi.nomform') }}</th>
                    <th>{{ __('multi.preciotable') }}</th>
                    <th>{{ __('multi.stocktable') }}</th>

                </tr>
                @foreach($productos as $producto)
                <tr>
                    <td>{{$producto->id}}</td>
                    <td>{{$producto->producto->nombre}}</td>
                    <td>{{$producto->precio}}</td>
                    <td>{{$producto->stock}}</td>

                </tr>
                @endforeach
            </table>
        </div>
        <div class="col-xl-4 col-lg-7 text-center">
            <h3>{{ __('multi.addline') }}</h3>
            <form action="{{route ('linea.store', $factura)}}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="factura" value="{{$factura->id}}">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">{{ __('multi.prodform') }}:</label>
                    </div>
                    <select class="custom-select" name="producto">
                        @foreach($productos as $producto)
                        <option value="{{$producto->id}}">{{$producto->producto->nombre}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">{{ __('multi.uniform') }}: </span>
                    </div>
                    <input type="number" id="unidades" class="form-control border" placeholder="Unidades" aria-label="Unidades" name="unidades" aria-describedby="basic-addon1">
                </div>

                <input type="submit" id="enviar" class="btn btn-primary" value="Añadir">
                @if(isset($error))
                <div class="alert alert-danger">
                    <ul>

                        <li>{{ $error }}</li>

                    </ul>
                </div>
                @endif
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div id="error_val" class="alert alert-danger" style="visibility:hidden">
                    <ul>

                        <li id="error_unidades">{{ __('multi.unirequeridos') }}</li>



                    </ul>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
