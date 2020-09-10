@extends('layouts.mjml')

@section('content')
<h3>CEE Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('cee/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('cee/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('cee/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('cee/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('cee/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('cee/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('cee/thirtyfive') }}">Day 35</a>
	</li>
	<li>
		<a href="{{ url('cee/fourtyseven') }}">Day 47</a>
	</li>
	<li>
		<a href="{{ url('cee/fiftyfive') }}">Day 55</a>
	</li>
</ul>
@endsection