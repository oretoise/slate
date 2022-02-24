@extends('layouts.mjml')

@section('content')
<h3>MSCEE Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('mscee/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('mscee/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('mscee/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('mscee/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('mscee/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('mscee/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('mscee/thirtyfive') }}">Day 35</a>
	</li>
	<li>
		<a href="{{ url('mscee/fourtyseven') }}">Day 47</a>
	</li>
	<li>
		<a href="{{ url('mscee/fiftyfive') }}">Day 55</a>
	</li>
</ul>
@endsection