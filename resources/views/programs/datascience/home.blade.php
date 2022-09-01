@extends('layouts.mjml')

@section('content')
<h3>DATASCIENCE Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('datascience/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('datascience/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('datascience/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('datascience/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('datascience/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('datascience/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('datascience/thirtyfive') }}">Day 35</a>
	</li>
	<li>
		<a href="{{ url('datascience/fourtyseven') }}">Day 47</a>
	</li>
	<li>
		<a href="{{ url('datascience/fiftyfive') }}">Day 55</a>
	</li>
</ul>
@endsection