@extends('layouts.app')

@section('content')
<section class="edit_user">
	<div class="card">
  	<div class="card-body">
    	<h5 class="card-title">Perfil de usuario</h5>

        	<div class="div_usuario_editar">

            	<form class="contact-form" action="{{route('user.update')}}" method="post">
                	@csrf
                	<div class="form-group">
                	<span>{{ __('multi.pnombre') }}</span>

                    	<input id="name" type="text" class="form_edit_user" name="name" value="{{ Auth::user()->name }}">
                    	@if($errors->has('name'))
                    	<div class="error">{{ $errors->first('name') }}</div>
                    	@endif
                	</div>

                	<div class="form-group">
                	<span>{{ __('multi.correo') }}</span>

                    	<input id="email" type="email" class="form_edit_user" name="email" value="{{ Auth::user()->email }}">
                    	@if($errors->has('email'))
                    	<div class="error">{{ $errors->first('email') }}</div>
                    	@endif
                	</div>
                	<div class="form-group">
                	<span>{{ __('multi.pass') }}</span>

                    	<input id="password" type="password" class="form_edit_user" name="password" placeholder="Password...">
                    	@if($errors->has('password'))
                    	<div class="error">{{ $errors->first('password') }}</div>
                    	@endif
                	</div>
                    <input type="hidden" name="id" value=" {{ Auth::user()->id }}">
                    <p id="error_email"></p>
                    <p id="error_pass"></p>
                    <p id="error_name"></p>
                	<button id="enviar" type="submit" class="btn btn-primary" name="Send">{{ __('multi.enviar') }}</button>
            	</form>

  	</div>
	</div>
</section>
@endsection
