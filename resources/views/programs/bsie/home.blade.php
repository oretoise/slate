@extends('layouts.mjml')

@section('content')
<h3>BSIE Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('bsie/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('bsie/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('bsie/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('bsie/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('bsie/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('bsie/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('bsie/thirtyfive') }}">Day 35</a>
	</li>
	<li>
		<a href="{{ url('bsie/fourtyseven') }}">Day 47</a>
	</li>
	<li>
		<a href="{{ url('bsie/fiftyfive') }}">Day 55</a>
	</li>
	<li>
		<a href="{{ url('bsie/sixty') }}">Day 60</a>
	</li>
</ul>
@endsection