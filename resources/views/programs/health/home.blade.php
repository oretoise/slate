@extends('layouts.mjml')

@section('content')
<h3>HEALTH Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('dev/health/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('dev/health/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('dev/health/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('dev/health/ten') }}">Day 10</a>
	</li>
    <li>
		<a href="{{ url('dev/health/thirteen') }}">Day 13</a>
	</li>
	<li>
		<a href="{{ url('dev/health/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('dev/health/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('dev/health/thirtyfive') }}">Day 35</a>
	</li>
	<li>
		<a href="{{ url('dev/health/fourtyseven') }}">Day 47</a>
	</li>
	<li>
		<a href="{{ url('dev/health/fiftyfive') }}">Day 55</a>
	</li>
</ul>
@endsection