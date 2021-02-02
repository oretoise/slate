@extends('layouts.mjml')

@section('content')
<h3>CMLL Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('cmll/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('cmll/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('cmll/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('cmll/fourteen') }}">Day 14</a>
	</li>
	<li>
		<a href="{{ url('cmll/twentyone') }}">Day 21</a>
	</li>
	<li>
		<a href="{{ url('cmll/thirty') }}">Day 30</a>
	</li>
	<li>
		<a href="{{ url('cmll/fourtytwo') }}">Day 42</a>
	</li>
	<li>
		<a href="{{ url('cmll/fourtynine') }}">Day 49</a>
	</li>
	<li>
		<a href="{{ url('cmll/fiftysix') }}">Day 56</a>
	</li>
</ul>
@endsection