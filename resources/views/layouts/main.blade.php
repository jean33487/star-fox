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
                        
                            <img src="/img/STAR-FOX.png" alt="Star-Fox Company"> 

                        </a>  

                        <ul class="navbar-nav">

                            <li class="nav-item">
                                <a href="/" class="nav-link">Pagina Inicicial</a>
                            </li>

                            <li class="nav-item">
                                <a href="/alunos" class="nav-link">Area do Aluno</a>
                            </li>

                            <li class="nav-item">
                                <a href="/professores" class="nav-link">Area do Professor</a>
                            </li>

                            <li class="nav-item">
                                <a href="/cordenação" class="nav-link">Area da Cordenacao</a>
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
