@extends('layouts.mjml')

@section('content')
<h3>ME Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('me/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('me/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('me/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('me/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('me/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('me/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('me/thirtyfive') }}">Day 35</a>
	</li>
	<li>
		<a href="{{ url('me/fourtyseven') }}">Day 47</a>
	</li>
	<li>
		<a href="{{ url('me/fiftyfive') }}">Day 55</a>
	</li>
</ul>
@endsection