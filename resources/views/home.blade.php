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
	<li><a href=" {{ url('psychology') }}">Psychology</a>
	<li><a href=" {{ url('wellness') }}">Wellness Coaching Certificate</a>
	<li><a href=" {{ url('agriculture') }}">Agriculture - ADS</a>
	<li><a href=" {{ url('geosciences/amp') }}">MS Geoscience - Applied Meteorology</a>
</ul>
@endsection
