@extends('layouts.mjml')

@section('content')
<h3>mppa Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('mppa/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('mppa/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('mppa/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('mppa/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('mppa/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('mppa/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('mppa/thirtyfive') }}">Day 35</a>
	</li>
	<li>
		<a href="{{ url('mppa/fourtyseven') }}">Day 47</a>
	</li>
	<li>
		<a href="{{ url('mppa/fiftyfive') }}">Day 55</a>
	</li>
</ul>
@endsection