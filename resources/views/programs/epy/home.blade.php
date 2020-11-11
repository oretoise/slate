@extends('layouts.mjml')

@section('content')
<h3>EPY Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('epy/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('epy/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('epy/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('epy/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('epy/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('epy/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('epy/thirtyfive') }}">Day 35</a>
	</li>
	<li>
		<a href="{{ url('epy/fourtyseven') }}">Day 47</a>
	</li>
	<li>
		<a href="{{ url('epy/fiftyfive') }}">Day 55</a>
	</li>
	<li>
		<a href="{{ url('epy/sixty') }}">Day 60</a>
	</li>
</ul>
@endsection