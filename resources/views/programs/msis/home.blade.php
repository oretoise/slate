@extends('layouts.mjml')

@section('content')
<h3>MSIS Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('dev/msis/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('dev/msis/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('dev/msis/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('dev/msis/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('dev/msis/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('dev/msis/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('dev/msis/thirtyone') }}">Day 31</a>
	</li>
	<li>
		<a href="{{ url('dev/msis/thirtyeight') }}">Day 38</a>
	</li>
	<li>
		<a href="{{ url('dev/msis/fourtyfive') }}">Day 45</a>
	</li>
</ul>
@endsection