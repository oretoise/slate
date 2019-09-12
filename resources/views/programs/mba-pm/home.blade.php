@extends('layouts.mjml')

@section('content')
<h3>MBAPM Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('mba-pm/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('mba-pm/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('mba-pm/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('mba-pm/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('mba-pm/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('mba-pm/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('mba-pm/thirtyone') }}">Day 31</a>
	</li>
	<li>
		<a href="{{ url('mba-pm/thirtyseven') }}">Day 37</a>
	</li>
	<li>
		<a href="{{ url('mba-pm/fourtyfour') }}">Day 44</a>
	</li>
	<li>
		<a href="{{ url('mba-pm/fiftyfive') }}">Day 55</a>
	</li>
	<li>
		<a href="{{ url('mba-pm/sixtyfive') }}">Day 65</a>
	</li>
</ul>
@endsection