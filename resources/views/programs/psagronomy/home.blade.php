@extends('layouts.mjml')

@section('content')
<h3>MS Agronomy Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('psagronomy/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('psagronomy/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('psagronomy/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('psagronomy/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('psagronomy/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('psagronomy/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('psagronomy/thirtyfive') }}">Day 35</a>
	</li>
	<li>
		<a href="{{ url('psagronomy/fourtyseven') }}">Day 47</a>
	</li>
	<li>
		<a href="{{ url('psagronomy/fiftyfive') }}">Day 55</a>
	</li>
</ul>
@endsection