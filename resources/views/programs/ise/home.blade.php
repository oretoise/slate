@extends('layouts.mjml')

@section('content')
<h3>ISE Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('ise/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('ise/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('ise/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('ise/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('ise/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('ise/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('ise/thirtyfive') }}">Day 35</a>
	</li>
	<li>
		<a href="{{ url('ise/fourtyseven') }}">Day 47</a>
	</li>
	<li>
		<a href="{{ url('ise/fiftyfive') }}">Day 55</a>
	</li>
</ul>
@endsection