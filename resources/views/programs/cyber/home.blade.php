@extends('layouts.mjml')

@section('content')
<h3>CYBER Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('cyber/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('cyber/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('cyber/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('cyber/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('cyber/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('cyber/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('cyber/thirtyfive') }}">Day 35</a>
	</li>
	<li>
		<a href="{{ url('cyber/fourtyseven') }}">Day 47</a>
	</li>
	<li>
		<a href="{{ url('cyber/fiftyfive') }}">Day 55</a>
	</li>
</ul>
@endsection