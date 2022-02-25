@extends('layouts.mjml')

@section('content')
<h3>MSME Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('msme/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('msme/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('msme/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('msme/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('msme/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('msme/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('msme/thirtyfive') }}">Day 35</a>
	</li>
	<li>
		<a href="{{ url('msme/fourtyseven') }}">Day 47</a>
	</li>
	<li>
		<a href="{{ url('msme/fiftyfive') }}">Day 55</a>
	</li>
</ul>
@endsection