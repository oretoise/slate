@extends('layouts.mjml')

@section('content')
<h3>PHASE Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('phase/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('phase/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('phase/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('phase/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('phase/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('phase/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('phase/thirtyfive') }}">Day 35</a>
	</li>
	<li>
		<a href="{{ url('phase/fourtyseven') }}">Day 47</a>
	</li>
	<li>
		<a href="{{ url('phase/fiftyfive') }}">Day 55</a>
	</li>
</ul>
@endsection