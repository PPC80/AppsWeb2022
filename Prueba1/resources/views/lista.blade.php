@extends('template')

@section('content')

<h1>LISTADO DE CALIFICACIONES</h1>
    @foreach ($grades as $grade)
    <p>
        <strong> {{$grade->id}}</strong>
        <a href="{{route('grades', $grade->slug)}}">
        {{$grade->nombre}}
        </a>
        <br>
    </p>
    @endforeach

    {{-- {{$grades->links()}} --}}

@endsection
