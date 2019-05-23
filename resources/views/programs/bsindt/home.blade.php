@extends('layouts.responsive')

@section('content')
<h3>BSINDT Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('bsindt/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('bsindt/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('bsindt/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('bsindt/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('bsindt/fourteen') }}">Day 14</a>
	</li>
	<li>
		<a href="{{ url('bsindt/seventeen') }}">Day 17 **NOT DONE**</a>
	</li>
	<li>
		<a href="{{ url('bsindt/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('bsindt/thirtyfive') }}">Day 35</a>
	</li>
	<li>
		<a href="{{ url('bsindt/fourtyseven') }}">Day 47</a>
	</li>
	<li>
		<a href="{{ url('bsindt/fiftyfive') }}">Day 55</a>
	</li>
</ul>
@endsection