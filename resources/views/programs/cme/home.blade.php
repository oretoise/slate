@extends('layouts.mjml')

@section('content')
<h3>CME Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('cme/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('cme/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('cme/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('cme/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('cme/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('cme/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('cme/thirtyfive') }}">Day 35</a>
	</li>
	<li>
		<a href="{{ url('cme/fourtyseven') }}">Day 47</a>
	</li>
	<li>
		<a href="{{ url('cme/fiftyfive') }}">Day 55</a>
	</li>
</ul>
@endsection