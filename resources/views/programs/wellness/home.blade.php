@extends('layouts.responsive')

@section('content')
<h3>WELLNESS Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('wellness/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('wellness/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('wellness/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('wellness/ten') }}">Day 10 - MISSING IMAGE</a>
	</li>
	<li>
		<a href="{{ url('wellness/thirteen') }}">Day 13</a>
	</li>
	<li>
		<a href="{{ url('wellness/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('wellness/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('wellness/thirtyfive') }}">Day 35</a>
	</li>
	<li>
		<a href="{{ url('wellness/fourtyseven') }}">Day 47</a>
	</li>
	<li>
		<a href="{{ url('wellness/fiftyfive') }}">Day 55 - MISSING IMAGE</a>
	</li>
</ul>
@endsection