@extends('layouts.mjml')

@section('content')
<h3>ANIMAL Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('animal/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('animal/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('animal/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('animal/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('animal/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('animal/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('animal/thirtyfive') }}">Day 35</a>
	</li>
	<li>
		<a href="{{ url('animal/fourtyseven') }}">Day 47</a>
	</li>
	<li>
		<a href="{{ url('animal/fiftyfive') }}">Day 55</a>
	</li>
</ul>
@endsection