@extends('layouts.mjml')

@section('content')
<h3>MSEI Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('msei/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('msei/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('msei/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('msei/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('msei/thirteen') }}">Day 13</a>
	</li>
	<li>
		<a href="{{ url('msei/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('msei/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('msei/thirtyfive') }}">Day 35</a>
	</li>
	<li>
		<a href="{{ url('msei/fourtyseven') }}">Day 47</a>
	</li>
	<li>
		<a href="{{ url('msei/fiftyfive') }}">Day 55</a>
	</li>
</ul>
@endsection