<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- FONTE DO GOOGLE -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
        <!-- CSS DA APLICAÇÃO -->
        <link rel= "stylesheet" href="/css/style.css"> 
        <!-- CSS DO BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

         
        
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
              <div class="collapse navbar-collapse" id="navbar">
                <a href="/" class="navbar-brand">
                  <img src="/img/hdcevents_logo.svg" alt="HDC Events">
                </a>
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a href="/" class="nav-link">Eventos</a>
                  </li>
                  <li class="nav-item">
                    <a href="/events/create" class="nav-link">Criar Eventos</a>
                  </li>
                  <li class="nav-item">
                    <a href="/" class="nav-link">Entrar</a>
                  </li>
                  <li class="nav-item">
                    <a href="/" class="nav-link">Cadastrar</a>
                  </li>
                </ul>
              </div>
            </nav>
          </header>
        @yield('content')
     <footer>
        <p>HDC Events &copy; 2020</p>
     </footer>
     <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>
