@extends('layouts.app')
@section('content')
<main class="content" height="100%">
    <div class="container p-0 mb-0">
        <h1 class="text-center mt-4 mb-2">{{$sociedad->nombre}}</h1>
		<div class="card" height=100px>
			<div class="row g-0">
				<div class="col-12 col-xs-12 col-md-3 col-lg-3 col-xl-3 border-right">
                    @foreach($sociedadusers as $usuarios)
                    @if ($logeado->id===$usuarios->users->id)
					<a href="#" class="list-group-item list-group-item-action border-0">
						<div class="d-flex align-items-start">
							<img src="/assets/img/profile.jpg" class="rounded-circle mr-1" alt="Fiona Green" width="40" height="40">
							<div class="flex-grow-1 ml-3">
                                {{$usuarios->users->nombre}}
                                <div class="small"><span class="fas fa-circle chat-online"></span> Online</div>
							</div>
						</div>
					</a>
                    @else
					<a href="#" class="list-group-item list-group-item-action border-0">
						<div class="d-flex align-items-start">
							<img src="/assets/img/profile.jpg" class="rounded-circle mr-1" alt="Fiona Green" width="40" height="40">
							<div class="flex-grow-1 ml-3">
                                {{$usuarios->users->nombre}}
                                <div class="small"><span class="fas fa-circle chat-offline"></span> Offline</div>
							</div>
						</div>
					</a>
                    @endif
                    @endforeach
					<hr class="d-block d-lg-none mt-1 mb-0">
				</div>
				<div class="col-12 col-xs-12 col-md-9 col-lg-9 col-xl-9 ">
					<div class="position-relative">
                        <d
						<div class="chat-messages p-4">
                            @foreach($mensajes as $mensaje)
                            @if ($logeado->id===$mensaje->user_id)

							<div class="mensajes chat-message-right mb-4">
								<div>
									<img src="/assets/img/profile.jpg" class="rounded-circle ml-1" alt="Chris Wood" width="40" height="40">
									<div class="text-muted small text-nowrap mt-2">{{ $mensaje->created_at->isoFormat('H:m A') }}</div>
								</div>
								<div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">
									<div class="font-weight-bold mb-1"><a href="{{ route('profiles.index',$mensaje->user_id) }}">{{$mensaje->user->nombre}}</a></div>
                                    {{$mensaje->mensaje}}
                                </div>
                            </div>
                            @else
                            <div class="mensajes chat-message-left mb-4">
								<div>
									<img src="/assets/img/profile.jpg" class="rounded-circle mr-1" alt="Chris Wood" width="40" height="40">
									<div class="text-muted small text-nowrap mt-2">{{ $mensaje->created_at->isoFormat('H:m A') }}</div>
								</div>
								<div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
									<div class="font-weight-bold mb-1"><a href="{{ route('profiles.index',$mensaje->user->id) }}">{{$mensaje->user->nombre}}</a></div>
                                    {{$mensaje->mensaje}}
                                </div>

                            </div>
                            @endif
                            @endforeach
						</div>
					</div>

					<div class="flex-grow-0 py-3 px-4 border-top">
                        <form class="form-group" action="{{ route('messages.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
						<div class="input-group">
                            <input type="text" class="form-control border" placeholder="Escribe un mensaje" name="mensa" required>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                        </form>
					</div>

				</div>
			</div>
		</div>
	</div>
</main>
<style>
body{margin-top:20px;}

/* content{
    position:fixed;
} */

.chat-online {
    color: #34ce57
}

.chat-offline {
    color: #e4606d
}

.chat-messages {
    display: flex;
    flex-direction: column;
    max-height: 800px;
    overflow-y: scroll
}

.chat-message-left,
.chat-message-right {
    display: flex;
    flex-shrink: 0
}

.chat-message-left {
    margin-right: 50%;
}

.chat-message-right {
    flex-direction: row-reverse;
    margin-left: 50%
}
.py-3 {
    padding-top: 1rem!important;
    padding-bottom: 1rem!important;
}
.px-4 {
    padding-right: 1.5rem!important;
    padding-left: 1.5rem!important;
}
.flex-grow-0 {
    flex-grow: 0!important;
}
.border-top {
    border-top: 1px solid #dee2e6!important;
}

</style>
@endsection
