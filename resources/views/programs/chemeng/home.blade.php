@extends('layouts.mjml')

@section('content')
<h3>CHEMENG Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('chemeng/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('chemeng/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('chemeng/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('chemeng/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('chemeng/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('chemeng/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('chemeng/thirtyfive') }}">Day 35</a>
	</li>
	<li>
		<a href="{{ url('chemeng/fourtyseven') }}">Day 47</a>
	</li>
	<li>
		<a href="{{ url('chemeng/fiftyfive') }}">Day 55</a>
	</li>
</ul>
@endsection