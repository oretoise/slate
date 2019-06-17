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
		<a href="{{ url('msis/thirtyseven') }}">Day 37</a>
	</li>
	<li>
		<a href="{{ url('msis/fourtyfour') }}">Day 44</a>
	</li>
	<li>
		<a href="{{ url('msis/fiftyfive') }}">Day 55</a>
	</li>
	<li>
		<a href="{{ url('msis/sixtyfive') }}">Day 65</a>
	</li>
</ul>
@endsection