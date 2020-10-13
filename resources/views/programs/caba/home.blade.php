@extends('layouts.mjml')

@section('content')
<h3>CABA Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('caba/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('caba/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('caba/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('caba/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('caba/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('caba/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('caba/thirtyfive') }}">Day 35</a>
	</li>
	<li>
		<a href="{{ url('caba/fourtyseven') }}">Day 47</a>
	</li>
	<li>
		<a href="{{ url('caba/fiftyfive') }}">Day 55</a>
	</li>
	<li>
		<a href="{{ url('caba/sixty') }}">Day 60</a>
	</li>
</ul>
@endsection