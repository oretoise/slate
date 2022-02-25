@extends('layouts.mjml')

@section('content')
<h3>PHME Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('phme/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('phme/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('phme/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('phme/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('phme/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('phme/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('phme/thirtyfive') }}">Day 35</a>
	</li>
	<li>
		<a href="{{ url('phme/fourtyseven') }}">Day 47</a>
	</li>
	<li>
		<a href="{{ url('phme/fiftyfive') }}">Day 55</a>
	</li>
</ul>
@endsection