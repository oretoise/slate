@extends('layouts.mjml')

@section('content')
<h3>MSCYSO Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('mscyso/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('mscyso/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('mscyso/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('mscyso/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('mscyso/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('mscyso/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('mscyso/thirtyfive') }}">Day 35</a>
	</li>
	<li>
		<a href="{{ url('mscyso/fourtyseven') }}">Day 47</a>
	</li>
	<li>
		<a href="{{ url('mscyso/fiftyfive') }}">Day 55</a>
	</li>
</ul>
@endsection