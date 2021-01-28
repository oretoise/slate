@extends('layouts.mjml')

@section('content')
<h3>CSE Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('cse/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('cse/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('cse/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('cse/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('cse/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('cse/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('cse/thirtyfive') }}">Day 35</a>
	</li>
	<li>
		<a href="{{ url('cse/fourtyseven') }}">Day 47</a>
	</li>
	<li>
		<a href="{{ url('cse/fiftyfive') }}">Day 55</a>
	</li>
</ul>
@endsection