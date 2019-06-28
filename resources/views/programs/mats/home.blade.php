@extends('layouts.responsive')

@section('content')
<h3>MATS Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('mats/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('mats/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('mats/five') }}">Day 5</a>
	</li>
	<li>
		<a href="{{ url('mats/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('mats/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('mats/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('mats/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('mats/thirtyone') }}">Day 31</a>
	</li>
	<li>
		<a href="{{ url('mats/thirtyseven') }}">Day 37</a>
	</li>
	<li>
		<a href="{{ url('mats/fourtyfour') }}">Day 44</a>
	</li>
	<li>
		<a href="{{ url('mats/fiftyfive') }}">Day 55</a>
	</li>
	<li>
		<a href="{{ url('mats/sixtyfive') }}">Day 65</a>
	</li>
</ul>
@endsection