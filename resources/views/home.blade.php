@extends('layouts.responsive')

@section('content')
<h2>List of Communication Plans:</h2>

<ul>
    <li><a href=" {{ url('test') }}">Test</a></li>
    <li><a href=" {{ url('bba') }}">BBA</a></li>
	<li><a href=" {{ url('bsis') }}">BSIS</a></li>
	<li><a href=" {{ url('elem') }}">ELEMED</a></li>
	<li><a href=" {{ url('geosciences/bomp') }}">BOMP</a></li>
	<li><a href=" {{ url('bsindt') }}">BSINDT</a></li>
	<li><a href=" {{ url('psychology') }}">Psychology</a></li>
	<li><a href=" {{ url('wellness') }}">Wellness Coaching Certificate</a></li>
	<li><a href=" {{ url('agriculture') }}">Agriculture - ADS</a></li>
	<li><a href=" {{ url('geosciences/amp') }}">MS Geoscience - Applied Meteorology</a></li>
	<li><a href=" {{ url('geosciences/engs') }}">MS Geosciences - Environmental</a></li>
	<li><a href=" {{ url('health') }}">MS Food Science, Nutrition, & Health Promotion</a></li>
	<li><a href=" {{ url('forestry') }}">MS Forestry</a></li>
	<li><a href=" {{ url('mabm') }}">Master's in Agribusiness Management</a></li>
	<li><a href=" {{ url('msei') }}">MS Early Intervention</a></li>
</ul>
@endsection
