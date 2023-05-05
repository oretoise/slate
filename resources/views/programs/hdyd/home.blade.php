@extends('layouts.mjml')

@section('content')
<h3>HDYD Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('hdyd/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('hdyd/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('hdyd/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('hdyd/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('hdyd/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('hdyd/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('hdyd/thirtyfive') }}">Day 35</a>
	</li>
	<li>
		<a href="{{ url('hdyd/fourtyseven') }}">Day 47</a>
	</li>
	<li>
		<a href="{{ url('hdyd/fiftyfive') }}">Day 55</a>
	</li>
	<li>
		<a href="{{ url('hdyd/sixty') }}">Day 60</a>
	</li>
</ul>
@endsection