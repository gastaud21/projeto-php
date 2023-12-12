<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */
        </style>
    </head>
    <body>
        <h1>
            titulo normal
        </h1>
        @if(10>5)
                <p>a conticao eh true</p>
        @endif
        @if(10>7)
                <p>testeee</p>
        @endif
        <p>{{ $nome }}</p>

        @for($i = 0; $i < count($arr); $i++)
            <p>{{ $arr[$i]}} - {{$i}}</p>
        @endfor

        @php
            $name = "joao";
            echo $name;
        @endphp

        @foreach($arr as $num)
            <p>{{$loop -> index}}</p>
            <p>{{$num}}</p>
        @endforeach
    </body>
</html>