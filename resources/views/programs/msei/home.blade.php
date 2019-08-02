@extends('layouts.mjml')

@section('content')
<h3>MSEI Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('dev/msei/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('dev/msei/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('dev/msei/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('dev/msei/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('dev/msei/thirteen') }}">Day 13</a>
	</li>
	<li>
		<a href="{{ url('dev/msei/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('dev/msei/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('dev/msei/thirtyfive') }}">Day 35</a>
	</li>
	<li>
		<a href="{{ url('dev/msei/fourtyseven') }}">Day 47</a>
	</li>
	<li>
		<a href="{{ url('dev/msei/fiftyfive') }}">Day 55</a>
	</li>
</ul>
@endsection