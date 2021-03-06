@extends('layouts.webmaster.WMView')

@section('webmasterContent')
<!-- Content Row -->
<script src="{{ url('assets/js/jquery-3.4.1.min.js')}}"></script>
<script>
    $(document).ready(function() {
        $("#myInput").on("keyup", function() {

            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>
<br>
<div class="row">
    <h1 class="d-flex justify-content-center text-primary container-fluid">Listado de productos</h1>
    <input class="form-control border col-xs-12 col-sm-12 col-md-12 col-xl-12 col-lg-12" id="myInput" type="text" placeholder="Buscador..">
    <table class="table table-striped border" id="dtBasicExample" cellspacing="0" width="100%" id="myList">
</div>

<div class="row">
  <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"><br>
    <div>
        <a class="btn btn-primary col-12" href="/webmaster/productCreate/">Añadir Producto</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Editar</th>
            </tr>
        </thead>
        <tbody id="myTable">
            @foreach($productos as $producto)
                <tr>
                    <td>{!! $producto->id !!}</td>
                    <td>{!! $producto->nombre !!}</td>
                     <td>{!! $producto->descripcion !!}</td>
                     <td><a href="/webmaster/productEdit/{{$producto->id}}"><i class="fa fa-pencil" style="color:black"></i></a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
  </div>
</div>
@endsection
