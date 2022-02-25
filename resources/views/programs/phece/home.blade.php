@extends('layouts.mjml')

@section('content')
<h3>PHECE Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('phece/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('phece/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('phece/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('phece/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('phece/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('phece/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('phece/thirtyfive') }}">Day 35</a>
	</li>
	<li>
		<a href="{{ url('phece/fourtyseven') }}">Day 47</a>
	</li>
	<li>
		<a href="{{ url('phece/fiftyfive') }}">Day 55</a>
	</li>
</ul>
@endsection