@extends('layouts.mjml')

@section('content')
<h3>ATHLETE Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('athlete/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('athlete/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('athlete/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('athlete/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('athlete/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('athlete/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('athlete/thirtyfive') }}">Day 35</a>
	</li>
	<li>
		<a href="{{ url('athlete/fourtyseven') }}">Day 47</a>
	</li>
	<li>
		<a href="{{ url('athlete/fiftyfive') }}">Day 55</a>
	</li>
	<li>
		<a href="{{ url('athlete/sixty') }}">Day 60</a>
	</li>
</ul>
@endsection