<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonte do Google -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <!-- CSS Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

        <!-- CSS da Aplicação -->
        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>

       
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                        <img src="/images/logo.webp" alt="Lorak 002"> Lorak 002
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/blog" class="nav-link">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="/photos" class="nav-link">Fotos</a>
                        </li>
                        <li class="nav-item">
                            <a href="/movements" class="nav-link">Movimentos do Crossfit</a>
                        </li>
                        <li class="nav-item">
                            <a href="/plans" class="nav-link">Planos</a>
                        </li>
                        <li class="nav-item">
                            <a href="/schedules" class="nav-link">Horarios</a>
                        </li>
                        <li class="nav-item">
                            <a href="/contact" class="nav-link">Contato</a>
                        </li>
                        
                    </ul>
                </div>
            </nav>
        </header>
        <main>
            <div class="container-fluid">
                <div class="row">
                    @yield('content')
                </div>
            </div>
        </main>
    <footer>
        <p>Lorak002 &copy; 2023</p>
    </footer>
    
    {{-- ION icons --}}
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    </body>
</html>
