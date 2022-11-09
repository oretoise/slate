@extends('layouts.mjml')

@section('content')
<h3>MAET Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('maet/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('maet/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('maet/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('maet/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('maet/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('maet/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('maet/thirtyfive') }}">Day 35</a>
	</li>
	<li>
		<a href="{{ url('maet/fourtyseven') }}">Day 47</a>
	</li>
	<li>
		<a href="{{ url('maet/fiftyfive') }}">Day 55</a>
	</li>
</ul>
@endsection