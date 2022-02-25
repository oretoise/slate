@extends('layouts.mjml')

@section('content')
<h3>PHCME Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('phcme/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('phcme/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('phcme/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('phcme/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('phcme/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('phcme/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('phcme/thirtyfive') }}">Day 35</a>
	</li>
	<li>
		<a href="{{ url('phcme/fourtyseven') }}">Day 47</a>
	</li>
	<li>
		<a href="{{ url('phcme/fiftyfive') }}">Day 55</a>
	</li>
</ul>
@endsection