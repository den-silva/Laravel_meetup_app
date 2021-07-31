<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="css/styles.css">
        <script src="js/scripts.js"></script>
    </head>
    <body class="antialiased">

    <h1>hello world </h1>
    @if(10 > 15)
        <p>A condição é true</p>
    @endif

    <p>{{$nome}}</p>

    @if($nome == "Denilson")
        <p>O nome é {{$nome}} e tem {{$idade}} anos</p>
    @elseif($nome == "Joao")
        <p>O nome é João</p>
    @else
        <p>O nome não é Denilson</p>
    @endif

    <!-- LAÇO DE REPETIÇÃO -->

    @for($i = 0; $i < count($arr); $i++)
            <p>{{$arr[$i]}}</p>
    @endfor
    
    <!-- IMPRIMIR VARIÁVEIS COM BLADE -->
    {{-- Este é o comentário com blade, não aparece no HTML da página--}}
    @php
        $name = 'denilson 2';
        echo $name;
    @endphp

    @for($i = 0; $i < count($nomes); $i++)
            <p>{{$nomes[$i]}}</p>
    @endfor
    </body>
</html>
