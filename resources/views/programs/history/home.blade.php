@extends('layouts.mjml')

@section('content')
<h3>HISTORY Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('dev/history/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('dev/history/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('dev/history/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('dev/history/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('dev/history/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('dev/history/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('dev/history/thirtyfive') }}">Day 35</a>
	</li>
	<li>
		<a href="{{ url('dev/history/fourtyseven') }}">Day 47</a>
	</li>
	<li>
		<a href="{{ url('dev/history/fiftyfive') }}">Day 55</a>
	</li>
	<li>
		<a href="{{ url('dev/history/sixty') }}">Day 60</a>
	</li>
</ul>
@endsection