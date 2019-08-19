@extends('layouts.mjml')

@section('content')
<h2>BBA Communication Plan:</h2>
<ul>
    <li><a href="{{ url('bba/zero') }}">zero</a></li>
    <li><a href="{{ url('bba/three') }}">three</a></li>
    <li><a href="{{ url('bba/seven') }}">seven</a></li>
    <li><a href="{{ url('bba/ten') }}">ten</a></li>
    <li><a href="{{ url('bba/seventeen') }}">seventeen</a></li>
    <li><a href="{{ url('bba/twentyfour') }}">twentyfour</a></li>
    <li><a href="{{ url('bba/thirtyfive') }}">thirtyfive</a></li>
    <li><a href="{{ url('bba/fourtyseven') }}">fourtyseven</a></li>
    <li><a href="{{ url('bba/fiftyfive') }}">fiftyfive</a></li>
</ul>
@endsection