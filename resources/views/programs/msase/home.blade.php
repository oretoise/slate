@extends('layouts.mjml')

@section('content')
<h3>MSASE Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('msase/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('msase/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('msase/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('msase/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('msase/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('msase/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('msase/thirtyfive') }}">Day 35</a>
	</li>
	<li>
		<a href="{{ url('msase/fourtyseven') }}">Day 47</a>
	</li>
	<li>
		<a href="{{ url('msase/fiftyfive') }}">Day 55</a>
	</li>
</ul>
@endsection