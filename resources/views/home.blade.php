@extends('layouts.responsive')

@section('content')
<h2>List of Communication Plans:</h2>

<ul>
    <li><a href=" {{ url('test') }}">Test</a>
    <li><a href=" {{ url('bba') }}">BBA</a>
	<li><a href=" {{ url('bsis') }}">BSIS</a>
	<li><a href=" {{ url('elem') }}">ELEMED</a>
	<li><a href=" {{ url('geosciences/bomp') }}">BOMP</a>
	<li><a href=" {{ url('bsindt') }}">BSINDT</a>
</ul>
@endsection
