<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonte do Google -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <!-- CSS Bootstrap -->

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        
        <!-- CSS da aplicação -->
    
        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                    <img src="/img/Fox_Spirit_SSBU.webp" alt="Star Fox Cursos">
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link">Página Inicial</a>
                        </li>
                        <li class="nav-item">
                            <a href="/areadoaluno/login" class="nav-link">Área do Aluno</a>
                        </li>
                        <li class="nav-item">
                            <a href="/areadoprofessor/login" class="nav-link">Área do Professor</a>
                        </li>
                        <li class="nav-item">
                            <a href="/areadasecretaria/login" class="nav-link">Área da Secretaria</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
     @yield('content')
     <footer>
       <p>Star Fox Cursos &copy; 2022</p>
     </footer>
     <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    </body>
</html>
