@extends('template')

@section('content')


<h1>{{$nota->nombre}}</h1>
<h4>
    Nota:
</h4>
<p>
    {{$nota->nota}}
</p>
@endsection
