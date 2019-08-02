@extends('layouts.mjml')

@section('content')
<h3>FORESTRY Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('dev/forestry/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('dev/forestry/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('dev/forestry/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('dev/forestry/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('dev/forestry/thirteen') }}">Day 13</a>
	</li>
	<li>
		<a href="{{ url('dev/forestry/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('dev/forestry/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('dev/forestry/thirtyfive') }}">Day 35</a>
	</li>
	<li>
		<a href="{{ url('dev/forestry/fourtyseven') }}">Day 47</a>
	</li>
	<li>
		<a href="{{ url('dev/forestry/fiftyfive') }}">Day 55</a>
	</li>
</ul>
@endsection