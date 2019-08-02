@extends('layouts.mjml')

@section('content')
<h3>ELEM Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('elem/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('elem/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('elem/five') }}">Day 5</a>
	</li>
	<li>
		<a href="{{ url('elem/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('elem/fourteen') }}">Day 14</a>
	</li>
	<li>
		<a href="{{ url('elem/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('elem/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('elem/thirtyfive') }}">Day 35</a>
	</li>
	<li>
		<a href="{{ url('elem/fourtyseven') }}">Day 47</a>
	</li>
	<li>
		<a href="{{ url('elem/fiftyfive') }}">Day 55</a>
	</li>
</ul>
@endsection