@extends('layouts.mjml')

@section('content')
<h3>CONSERVATION Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('conservation/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('conservation/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('conservation/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('conservation/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('conservation/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('conservation/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('conservation/thirtyfive') }}">Day 35</a>
	</li>
	<li>
		<a href="{{ url('conservation/fourtyseven') }}">Day 47</a>
	</li>
	<li>
		<a href="{{ url('conservation/fiftyfive') }}">Day 55</a>
	</li>
</ul>
@endsection