<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>@yield('title')</title>

        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"  crossorigin="anonymos">


        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script> 
    </head>
        <body>
            <header>

                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="collapse navbar-collapse" id="navbar" >
                     
                        <a href="/" class="navbar-brand">
                        
                            <img src="/img/Starfox__3__Logo.png" alt="Star-Fox Company"> 

                        </a>  

                        <ul class="navbar-nav">


                            <li class="nav-item">
                                <a href="/login" class="nav-link">Área do Aluno</a>
                            </li>

                            <li class="nav-item">
                                <a href="/login" class="nav-link">Área do Professor</a>
                            </li>

                            <li class="nav-item">
                                <a href="/login" class="nav-link">Área da Coordenação</a>
                            </li>

                        </ul>
                        
                    </div>
                </nav>

            </header>
            @yield('content')

            <footer>
                <p>Star-Fox  school &copy; 2022</p>
            </footer>
        </body>
</html>

