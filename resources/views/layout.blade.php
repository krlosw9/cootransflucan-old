<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>COOTRANSFLUCAN</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        @livewireStyles
    </head>
    <body>
        <!--NavBar-->
        <nav class="navbar navbar-expand-sm navbar-light bg-light shadow mb-4">
            <div class="container-fluid">
              <a class="navbar-brand" href="/">Cootransflucan</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Embarcaciones</a>
                  </li>
                </ul>
              </div>
            </div>
        </nav>
        

        <!--End NavBar-->
        @yield('content')

        @livewireScripts
    </body>
</html>
