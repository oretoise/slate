@extends('layouts.mjml')

@section('content')
<h3>ANIMAL Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('camc/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('camc/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('camc/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('camc/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('camc/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('camc/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('camc/thirtyfive') }}">Day 35</a>
	</li>
	<li>
		<a href="{{ url('camc/fourtyseven') }}">Day 47</a>
	</li>
	<li>
		<a href="{{ url('camc/fiftyfive') }}">Day 55</a>
	</li>
</ul>
@endsection