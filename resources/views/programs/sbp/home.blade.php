@extends('layouts.mjml')

@section('content')
<h3>SUSBIO Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('susbio/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('susbio/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('susbio/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('susbio/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('susbio/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('susbio/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('susbio/thirtyfive') }}">Day 35</a>
	</li>
	<li>
		<a href="{{ url('susbio/fourtyseven') }}">Day 47</a>
	</li>
	<li>
		<a href="{{ url('susbio/fiftyfive') }}">Day 55</a>
	</li>
</ul>
@endsection