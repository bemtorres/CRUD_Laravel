<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Home </title>
    <style>
    .active{
        text-decoration: none;
        color : green;
    }
    </style>
        <style>
                .bd-placeholder-img {
                  font-size: 1.125rem;
                  text-anchor: middle;
                  -webkit-user-select: none;
                  -moz-user-select: none;
                  -ms-user-select: none;
                  user-select: none;
                }
          
                @media (min-width: 768px) {
                  .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                  }
                }
              </style>
</head>
<body>
  <?php
    
      function activeMenu($url){
        return request()->is($url) ? 'active' : '';
      }

    ?>
        <header>
                <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-info">
                  
                  {{-- <a href="{{ route('home') }}">Home</a>     --}}
                  <h1>Linda Sonrisa</h1>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item active">
                        
                        <a class="nav-link" href="{{ route('home') }}">Home</a>    
                      </li>
                      <li class="nav-item"> 
                        <a class="nav-link " href="{{ route('saludos','benjamin') }}">Toma de hora</a>
                      </li>
                      <li class="nav-item">
                        
                        <a class="nav-link" href="{{ route('contactame') }}">Contactos</a>
                      </li>
                      <li class="nav-item">
                        
                        <a class="nav-link" href="{{ route('mensaje.create') }}">Nuevo Mensaje</a>
                      </li>
                    </ul>
                  </div>
                </nav>
              </header>
    {{-- <header>
       
        <nav>
            <a class="active" href="{{ route('home') }}">Home</a>            
            <a href="{{ route('saludos','benjamin') }}">Saludos</a>
            <a href="{{ route('contactame') }}">Contactos</a>
            <a href="/">Home</a>
        </nav>
    </header> --}}
    <br> <br> <br>
    <main role="main">
        <div class="container">
            <div class="row">
                    @yield('contenido')
            </div>
        </div>

   
    <footer>LindaRonrisa {{ date('Y ') }}</footer>
    </main>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
