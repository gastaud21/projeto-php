@extends("layouts.main")
@section("title", "footerzin")

@section("content")
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
@endsection
