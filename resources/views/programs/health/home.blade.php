@extends('layouts.mjml')

@section('content')
<h3>HEALTH Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('health/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('health/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('health/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('health/ten') }}">Day 10</a>
	</li>
    <li>
		<a href="{{ url('health/thirteen') }}">Day 13</a>
	</li>
	<li>
		<a href="{{ url('health/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('health/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('health/thirtyfive') }}">Day 35</a>
	</li>
	<li>
		<a href="{{ url('health/fourtyseven') }}">Day 47</a>
	</li>
	<li>
		<a href="{{ url('health/fiftyfive') }}">Day 55</a>
	</li>
</ul>
@endsection