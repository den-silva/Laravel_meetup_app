<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <script src="js/scripts.js"></script>

        <!-- FONTES DO GOOGLE -->

        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet"> 

        <!-- BOOTSTRAP -->

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
        <!-- CSS CUSTOMIZÁVEL -->
        <link rel="stylesheet" href="css/styles.css">

    </head>
    <body>
        <header>
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="collapse navbar-collapse" id="navbar">
                        <a href="/" class="navbar-brand">
                            <img src="img/logo.jpg" alt="MeetUp App">
                        </a>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="/" class="nav-link">Eventos</a>
                            </li>
                            <li class="nav-item">
                                <a href="/events/create" class="nav-link">Criar</a>
                            </li>
                            <li class="nav-item">
                                <a href="/" class="nav-link">Entrar</a>
                            </li>
                            <li class="nav-item">
                                <a href="/contacts/create" class="nav-link">Cadastro</a>
                            </li>
    
                            <li class="nav-item">
                                <a href="/products/create" class="nav-link">Produtos</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            
        </header>

        @yield('content')
        <footer>
            <p>MeetUp App &copy 2021</p>
        </footer>
        <script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
    
</html>
