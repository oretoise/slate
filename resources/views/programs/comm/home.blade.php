@extends('layouts.mjml')

@section('content')
<h3>COMM Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('comm/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('comm/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('comm/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('comm/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('comm/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('comm/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('comm/thirtyfive') }}">Day 35</a>
	</li>
	<li>
		<a href="{{ url('comm/fourtyseven') }}">Day 47</a>
	</li>
	<li>
		<a href="{{ url('comm/fiftyfive') }}">Day 55</a>
	</li>
	<li>
		<a href="{{ url('comm/sixty') }}">Day 60</a>
	</li>
</ul>
@endsection