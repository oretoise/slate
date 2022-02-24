@extends('layouts.mjml')

@section('content')
<h3>PHCEE Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('phcee/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('phcee/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('phcee/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('phcee/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('phcee/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('phcee/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('phcee/thirtyfive') }}">Day 35</a>
	</li>
	<li>
		<a href="{{ url('phcee/fourtyseven') }}">Day 47</a>
	</li>
	<li>
		<a href="{{ url('phcee/fiftyfive') }}">Day 55</a>
	</li>
</ul>
@endsection