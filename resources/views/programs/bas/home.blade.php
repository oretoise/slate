@extends('layouts.mjml')

@section('content')
<h3>BAS Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('bas/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('bas/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('bas/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('bas/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('bas/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('bas/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('bas/thirtyfive') }}">Day 35</a>
	</li>
	<li>
		<a href="{{ url('bas/fourtyseven') }}">Day 47</a>
	</li>
	<li>
		<a href="{{ url('bas/fiftyfive') }}">Day 55</a>
	</li>
	<li>
		<a href="{{ url('bas/sixty') }}">Day 60</a>
	</li>
</ul>
@endsection