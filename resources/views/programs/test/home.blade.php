@extends('layouts.responsive')

@section('content')
<h2>{{ strtoupper($program) }} Communication Plan:</h2>
<ul>
    <li><a href="{{ url('test/zero') }}">zero</a></li>
</ul>
@endsection