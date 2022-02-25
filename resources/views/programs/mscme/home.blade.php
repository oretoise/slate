@extends('layouts.mjml')

@section('content')
<h3>MSCME Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('mscme/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('mscme/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('mscme/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('mscme/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('mscme/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('mscme/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('mscme/thirtyfive') }}">Day 35</a>
	</li>
	<li>
		<a href="{{ url('mscme/fourtyseven') }}">Day 47</a>
	</li>
	<li>
		<a href="{{ url('mscme/fiftyfive') }}">Day 55</a>
	</li>
</ul>
@endsection