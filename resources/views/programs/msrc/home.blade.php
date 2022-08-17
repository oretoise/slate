@extends('layouts.mjml')

@section('content')
<h3>MSRC Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('msrc/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('msrc/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('msrc/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('msrc/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('msrc/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('msrc/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('msrc/thirtyfive') }}">Day 35</a>
	</li>
	<li>
		<a href="{{ url('msrc/fourtyseven') }}">Day 47</a>
	</li>
	<li>
		<a href="{{ url('msrc/fiftyfive') }}">Day 55</a>
	</li>
	<li>
		<a href="{{ url('msrc/sixty') }}">Day 60</a>
	</li>
</ul>
@endsection