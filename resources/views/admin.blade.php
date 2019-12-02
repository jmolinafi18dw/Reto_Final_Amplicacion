<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/carousel.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" type="img/png" href="assets\img\logo_alpha.png">
</head>

<body>
<section class="header">
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
      <a href="#top"><img src="assets\img\logo_alpha_white.png" width="50" height="50" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="contenido collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
              
              <li class="nav-item">
                  <a class="nav-link" >{{ Auth::user()->name }}</a>
              </li>
             
              <li class="nav-item">
              @guest
                           
              @else
              
             

                               
                                    <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                
                            </li>
                        @endguest

              
              <li class="nav-item">
                  <a href="{{ url('locale/es') }}"><i class="fa fa-language"></i>ES</a>
              </li>

              <li>
                  <a href="{{ url('locale/en') }}"><i class="fa fa-language"></i>EN</a>
              </li>
              <li>
                  <a href="{{ url('locale/eus') }}"><i class="fa fa-language"></i>EUS</a>
              </li>

          </ul>
      </div>
  </nav>
</section>



    @if(Auth::user()->isAdmin())
    <div class="div_admin">
        <h2>{{ __('multi.acceso') }}</h2>

        <table>
            <tr>
                <th>{{ __('multi.usuario') }}</th>
                <th>{{ __('multi.correo') }}</th>
                <th>{{ __('multi.rol') }}</th>
            </tr>
            @if (isset($usuarios) )
            @foreach ($usuarios as $usuario)
            <tr>
                <td>{{$usuario->name}}</td>
                <td>{{$usuario->email}}</td>
                <td><a href="/edit_user/{{$usuario->id}}">{{ __('multi.editar') }}</a></td>
                <td><a href="/delete/{{$usuario->id}}">{{ __('multi.eliminar') }}</a></td>
            </tr>

            @endforeach
        </table>
        @endif
    </div>

    @else
    <div class="div_admin">
    <h3>Pirate de aqui que no eres admin</h3>
    </div>
    @endif


    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="assets/js/jquery.backstretch.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>