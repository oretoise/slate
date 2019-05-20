@extends('layouts.responsive')

@section('content')
<h2>{{ strtoupper($program) }} Communication Plan:</h2>
<ul>
    <li><a href="{{ url('bba/zero') }}">zero</a></li>
    <li><a href="{{ url('bba/three') }}">three</a></li>
    <li><a href="{{ url('bba/seven') }}">seven</a></li>
    <li><a href="{{ url('bba/ten') }}">ten</a></li>
</ul>
@endsection