@extends('layouts.mjml')

@section('content')
<h3>PHISE Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('phise/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('phise/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('phise/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('phise/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('phise/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('phise/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('phise/thirtyfive') }}">Day 35</a>
	</li>
	<li>
		<a href="{{ url('phise/fourtyseven') }}">Day 47</a>
	</li>
	<li>
		<a href="{{ url('phise/fiftyfive') }}">Day 55</a>
	</li>
</ul>
@endsection