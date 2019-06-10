@extends('layouts.responsive')

@section('content')
<h3>AGRICULTURE Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('agriculture/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('agriculture/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('agriculture/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('agriculture/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('agriculture/thirteen') }}">Day 13</a>
	</li>
	<li>
		<a href="{{ url('agriculture/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('agriculture/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('agriculture/thirtyfive') }}">Day 35</a>
	</li>
	<li>
		<a href="{{ url('agriculture/fourtyseven') }}">Day 47</a>
	</li>
	<li>
		<a href="{{ url('agriculture/fiftyfive') }}">Day 55</a>
	</li>
</ul>
@endsection