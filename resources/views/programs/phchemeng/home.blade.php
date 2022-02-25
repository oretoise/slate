@extends('layouts.mjml')

@section('content')
<h3>PHCHEMENG Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('phchemeng/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('phchemeng/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('phchemeng/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('phchemeng/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('phchemeng/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('phchemeng/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('phchemeng/thirtyfive') }}">Day 35</a>
	</li>
	<li>
		<a href="{{ url('phchemeng/fourtyseven') }}">Day 47</a>
	</li>
	<li>
		<a href="{{ url('phchemeng/fiftyfive') }}">Day 55</a>
	</li>
</ul>
@endsection