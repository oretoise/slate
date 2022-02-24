@extends('layouts.mjml')

@section('content')
<h3>MSCSE Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('mscse/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('mscse/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('mscse/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('mscse/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('mscse/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('mscse/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('mscse/thirtyfive') }}">Day 35</a>
	</li>
	<li>
		<a href="{{ url('mscse/fourtyseven') }}">Day 47</a>
	</li>
	<li>
		<a href="{{ url('mscse/fiftyfive') }}">Day 55</a>
	</li>
</ul>
@endsection