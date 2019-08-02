@extends('layouts.mjml')

@section('content')
<h3>WELLNESS Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('dev/wellness/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('dev/wellness/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('dev/wellness/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('dev/wellness/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('dev/wellness/thirteen') }}">Day 13</a>
	</li>
	<li>
		<a href="{{ url('dev/wellness/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('dev/wellness/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('dev/wellness/thirtyfive') }}">Day 35</a>
	</li>
	<li>
		<a href="{{ url('dev/wellness/fourtyseven') }}">Day 47</a>
	</li>
	<li>
		<a href="{{ url('dev/wellness/fiftyfive') }}">Day 55</a>
	</li>
</ul>
@endsection