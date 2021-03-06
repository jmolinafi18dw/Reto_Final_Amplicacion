@extends('layouts.webmaster.WMView')

@section('webmasterContent')
<script src="{{url('assets/js/val_Producto.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{url('assets/css/val_producto.css')}}">
<!-- Content Row -->
<br><br>
<div class="container-fluid">

    <h1 class="d-flex justify-content-center text-primary container-fluid">Añadir productos</h1><br>

    <form action="{{route ('webmaster.productUpdate', $producto->id)}}" method="post">
            {{ csrf_field() }}
        <div class="input-group-prepend col-12">
            <span class="input-group-text" id="basic-addon1">Nombre: </span>
            <input id="nombre" class="form-control border" aria-describedby="basic-addon1" type="text" name="nombre" value="{{$producto->nombre}}" size="53" pattern="(?=.*[a-z])(?=.*[A-Z]).{3,25}" title="Primera letra mayuscula" required>
        </div><br>

        <div class="input-group-prepend col-12">
            <span class="input-group-text" id="basic-addon1">Descripcion: </span>
            <input id="descripcion" class="form-control border" aria-describedby="basic-addon1" type="text" name="descripcion" size="50" value="{{$producto->descripcion}}"  pattern="(?=.*[a-z])(?=.*[A-Z]).{3,50}" title="Primera letra mayuscula" required>
        </div><br>

        <div class="input-group-prepend col-12">
            <input id="enviar" class="btn reserva btn-primary" type="submit" value="Actualizar"><br>
        </div>
        </form>
</div>
{{-- Validacion Laravel --}}
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
@endif
    </div>

</div>
<script type="text/javascript">
    //Validacion con jquery.
    let Nombre = document.getElementById("nombre");
    let Descri = document.getElementById("descripcion");
    let enviar = document.getElementById("enviar");
    //Primera letra tiene que ser mayuscula.
    let patron = /^[A-Z]{1}[a-z0-9]{2}/g;
    //El boton enviar esta deshabilitado hasta que se cumplan las condiciones.
    enviar.disabled = true;
    //Cuando presione sobre el campo nombre...
    Nombre.onkeyup = function()
    {
        //Si se cumple, se cambia la clase a valid
        //Se habilitad el boton enviar.
        if (Nombre.value.match(patron)) {
            nombre.classList.remove("invalid");
            nombre.classList.add("valid");
            enviar.disabled = false;
        }
        //De lo contrario,se cambia la clase a invalid
        //Se habilitad el boton enviar.
        else
        {
            nombre.classList.remove("valid");
            nombre.classList.add("invalid");
            enviar.disabled = true;
        }
    }
    //Cuando presione sobre el campo descripcion...
    Descri.onkeyup = function()
    {
        //Si se cumple, se cambia la clase a valid
        //Se habilitad el boton enviar.
        if (Descri.value.match(patron)) {
            descripcion.classList.remove("invalid");
            descripcion.classList.add("valid");
            enviar.disabled = false;

        }
        //De lo contrario,se cambia la clase a invalid
        //Se habilitad el boton enviar.
        else
        {
            descripcion.classList.remove("valid");
            descripcion.classList.add("invalid");
            enviar.disabled = true;
        }
    }
</script>
@endsection

