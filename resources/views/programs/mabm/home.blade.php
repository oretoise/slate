@extends('layouts.mjml')

@section('content')
<h3>MABM Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('mabm/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('mabm/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('mabm/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('mabm/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('mabm/thirteen') }}">Day 13</a>
	</li>
	<li>
		<a href="{{ url('mabm/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('mabm/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('mabm/thirtyfive') }}">Day 35</a>
	</li>
	<li>
		<a href="{{ url('mabm/fourtyseven') }}">Day 47</a>
	</li>
	<li>
		<a href="{{ url('mabm/fiftyfive') }}">Day 55</a>
	</li>
</ul>
@endsection