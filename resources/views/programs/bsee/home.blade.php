@extends('layouts.mjml')

@section('content')
<h3>BSEE Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('bsee/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('bsee/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('bsee/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('bsee/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('bsee/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('bsee/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('bsee/thirtyfive') }}">Day 35</a>
	</li>
	<li>
		<a href="{{ url('bsee/fourtyseven') }}">Day 47</a>
	</li>
	<li>
		<a href="{{ url('bsee/fiftyfive') }}">Day 55</a>
	</li>
	<li>
		<a href="{{ url('bsee/sixty') }}">Day 60</a>
	</li>
</ul>
@endsection