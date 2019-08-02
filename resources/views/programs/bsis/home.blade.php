@extends('layouts.mjml')

@section('content')
<h3>BSIS Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('bsis/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('bsis/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('bsis/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('bsis/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('bsis/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('bsis/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('bsis/thirtyfive') }}">Day 35</a>
	</li>
	<li>
		<a href="{{ url('bsis/fourtyseven') }}">Day 47</a>
	</li>
	<li>
		<a href="{{ url('bsis/fiftyfive') }}">Day 55</a>
	</li>
	<li>
		<a href="{{ url('bsis/sixty') }}">Day 60</a>
	</li>
</ul>
@endsection