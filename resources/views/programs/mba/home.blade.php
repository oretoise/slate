@extends('layouts.responsive')

@section('content')
<h3>MBA Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('mba/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('mba/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('mba/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('mba/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('mba/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('mba/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('mba/thirtyone') }}">Day 31</a>
	</li>
	<li>
		<a href="{{ url('mba/thirtyseven') }}">Day 37</a>
	</li>
	<li>
		<a href="{{ url('mba/fourtyfour') }}">Day 44</a>
	</li>
	<li>
		<a href="{{ url('mba/fiftyfive') }}">Day 55</a>
	</li>
	<li>
		<a href="{{ url('mba/sixtyfive') }}">Day 65</a>
	</li>
</ul>
@endsection