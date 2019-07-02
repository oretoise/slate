@extends('layouts.responsive')

@section('content')
<h3>MSIS Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('msis/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('msis/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('msis/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('msis/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('msis/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('msis/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('msis/thirtyone') }}">Day 31</a>
	</li>
	<li>
		<a href="{{ url('msis/thirtyeight') }}">Day 38</a>
	</li>
	<li>
		<a href="{{ url('msis/fourtyfive') }}">Day 45</a>
	</li>
</ul>
@endsection