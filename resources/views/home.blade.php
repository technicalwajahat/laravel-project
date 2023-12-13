{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body> --}}
    {{-- @php
        $fruits = ["one" => "Apple", "two" => "Banana", "three" => "Orange"];
        // $fruits = [];
        $value = "waji";
    @endphp --}}

    {{-- @include('pages.header', ['names' => $fruits]) --}}
    {{-- @includeUnless(empty($value), 'pages.header', ['names' => $fruits]) --}}

    {{-- Page Exsist --}}
    {{-- @includeIf('pages.content') --}}

    {{-- <h1>Hello, Wajahat Asif</h1>
    <a href="{{ route('myPost') }}">Post Page</a>
    <a href="{{ route('about') }}">About Page</a>
    <br><br>
    {{ 5 + 2 }}
    <br><br>
    {{ "Hello World" }}
    <br><br>
    {{ "<h1>Hello World</h1>" }}
    <br><br>
    {!! "<h1>Wajahat Awan</h1>" !!} --}}
    {{-- {!! "<script>alert('KING!!!')</script>" !!} --}}    
    {{-- !Comment Statment! --}}

    {{-- @php
        $user = "King Wajahat Awan!";
        $names = ["Salman Khan", "Shahrukh Khan", "Tiger Shroff"]
    @endphp --}}

    {{-- <ul>
    @foreach ($names as $name)
        <li>{{ $loop->count }} {{ $name }}</li>
    @endforeach
    </ul> --}}

    {{-- <ul>
        @foreach ($names as $name)
            <li>{{ $loop->iteration }} {{ $name }}</li>
        @endforeach
    </ul> --}}

    {{-- <ul>
        @foreach ($names as $name)
            <li>{{ $loop->index }} {{ $name }}</li>
        @endforeach
    </ul> --}}


    {{-- <ul>
        @foreach ($names as $name)
            @if ($loop->first)
                <li style="color:red">{{ $name }}</li>
            @elseif ($loop->last)
                <li style="color:green">{{ $name }}</li>
            @else ($loop->first)
                <li style="color:blue">{{ $name }}</li>
            @endif
        @endforeach
    </ul> --}}

    {{-- {{ $user }} --}}
{{-- 
</body>
</html> --}}


@extends('layouts.masterlayout')
@section('content')
    @parent
    <h2>Home Page</h2>
@endsection

@section('title')
    Home
@endsection

@push('scripts')
    <script src="/example.js"></script>    
@endpush