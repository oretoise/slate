@extends('layouts.mjml')

@section('content')
<h3>MS Weed Science Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('psweed/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('psweed/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('psweed/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('psweed/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('psweed/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('psweed/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('psweed/thirtyfive') }}">Day 35</a>
	</li>
	<li>
		<a href="{{ url('psweed/fourtyseven') }}">Day 47</a>
	</li>
	<li>
		<a href="{{ url('psweed/fiftyfive') }}">Day 55</a>
	</li>
</ul>
@endsection