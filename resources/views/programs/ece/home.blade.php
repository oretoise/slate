@extends('layouts.mjml')

@section('content')
<h3>ECE Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('ece/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('ece/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('ece/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('ece/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('ece/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('ece/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('ece/thirtyfive') }}">Day 35</a>
	</li>
	<li>
		<a href="{{ url('ece/fourtyseven') }}">Day 47</a>
	</li>
	<li>
		<a href="{{ url('ece/fiftyfive') }}">Day 55</a>
	</li>
</ul>
@endsection