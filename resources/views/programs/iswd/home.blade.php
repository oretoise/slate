@extends('layouts.mjml')

@section('content')
<h3>ISWD Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('iswd/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('iswd/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('iswd/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('iswd/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('iswd/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('iswd/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('iswd/thirtyfive') }}">Day 35</a>
	</li>
	<li>
		<a href="{{ url('iswd/fourtyseven') }}">Day 47</a>
	</li>
	<li>
		<a href="{{ url('iswd/fiftyfive') }}">Day 55</a>
	</li>
	<li>
		<a href="{{ url('iswd/sixty') }}">Day 60</a>
	</li>
</ul>
@endsection