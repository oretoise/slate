@extends('layouts.responsive')

@section('content')
<h3>MATX Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('matx/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('matx/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('matx/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('matx/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('matx/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('matx/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('matx/thirtyone') }}">Day 31</a>
	</li>
	<li>
		<a href="{{ url('matx/thirtyseven') }}">Day 37</a>
	</li>
	<li>
		<a href="{{ url('matx/fourtyfour') }}">Day 44</a>
	</li>
	<li>
		<a href="{{ url('matx/fiftyfive') }}">Day 55</a>
	</li>
	<li>
		<a href="{{ url('matx/sixtyfive') }}">Day 65</a>
	</li>
</ul>
@endsection