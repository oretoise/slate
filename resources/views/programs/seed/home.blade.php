@extends('layouts.responsive')

@section('content')
<h3>SEED Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('seed/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('seed/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('seed/five') }}">Day 5</a>
	</li>
	<li>
		<a href="{{ url('seed/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('seed/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('seed/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('seed/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('seed/thirtyone') }}">Day 31</a>
	</li>
	<li>
		<a href="{{ url('seed/thirtyeight') }}">Day 38</a>
	</li>
	<li>
		<a href="{{ url('seed/fourtyfive') }}">Day 45</a>
	</li>
	<li>
		<a href="{{ url('seed/fiftytwo') }}">Day 52</a>
	</li>
	<li>
		<a href="{{ url('seed/fiftynine') }}">Day 59</a>
	</li>
</ul>
@endsection