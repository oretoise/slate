@extends('layouts.responsive')

@section('content')
<h2>List of Communication Plans:</h2>

<ul>
    <li><a href=" {{ url('test') }}">Test</a>
    <li><a href=" {{ url('bba') }}">BBA</a>
</ul>
@endsection