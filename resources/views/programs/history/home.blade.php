@extends('layouts.mjml')

@section('content')
<h3>HISTORY Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('history/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('history/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('history/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('history/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('history/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('history/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('history/thirtyfive') }}">Day 35</a>
	</li>
	<li>
		<a href="{{ url('history/fourtyseven') }}">Day 47</a>
	</li>
	<li>
		<a href="{{ url('history/fiftyfive') }}">Day 55</a>
	</li>
	<li>
		<a href="{{ url('history/sixty') }}">Day 60</a>
	</li>
</ul>
@endsection