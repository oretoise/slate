@extends('layouts.mjml')

@section('content')
<h3>PHCSE Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('phcse/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('phcse/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('phcse/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('phcse/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('phcse/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('phcse/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('phcse/thirtyfive') }}">Day 35</a>
	</li>
	<li>
		<a href="{{ url('phcse/fourtyseven') }}">Day 47</a>
	</li>
	<li>
		<a href="{{ url('phcse/fiftyfive') }}">Day 55</a>
	</li>
</ul>
@endsection