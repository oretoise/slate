@extends('layouts.mjml')

@section('content')
<h3>BSIS Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('dev/bsis/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('dev/bsis/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('dev/bsis/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('dev/bsis/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('dev/bsis/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('dev/bsis/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('dev/bsis/thirtyfive') }}">Day 35</a>
	</li>
	<li>
		<a href="{{ url('dev/bsis/fourtyseven') }}">Day 47</a>
	</li>
	<li>
		<a href="{{ url('dev/bsis/fiftyfive') }}">Day 55</a>
	</li>
	<li>
		<a href="{{ url('dev/bsis/sixty') }}">Day 60</a>
	</li>
</ul>
@endsection