@extends('layouts.mjml')

@section('content')
<h3>ENSC Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('ensc/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('ensc/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('ensc/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('ensc/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('ensc/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('ensc/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('ensc/thirtyfive') }}">Day 35</a>
	</li>
	<li>
		<a href="{{ url('ensc/fourtyseven') }}">Day 47</a>
	</li>
	<li>
		<a href="{{ url('ensc/fiftyfive') }}">Day 55</a>
	</li>
</ul>
@endsection