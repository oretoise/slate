@extends('layouts.mjml')

@section('content')
<h3>MSECE Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('msece/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('msece/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('msece/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('msece/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('msece/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('msece/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('msece/thirtyfive') }}">Day 35</a>
	</li>
	<li>
		<a href="{{ url('msece/fourtyseven') }}">Day 47</a>
	</li>
	<li>
		<a href="{{ url('msece/fiftyfive') }}">Day 55</a>
	</li>
</ul>
@endsection