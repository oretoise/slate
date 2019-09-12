@extends('layouts.mjml')

@section('content')
<h3>MBAPM Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('mbapm/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('mbapm/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('mbapm/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('mbapm/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('mbapm/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('mbapm/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('mbapm/thirtyone') }}">Day 31</a>
	</li>
	<li>
		<a href="{{ url('mbapm/thirtyseven') }}">Day 37</a>
	</li>
	<li>
		<a href="{{ url('mbapm/fourtyfour') }}">Day 44</a>
	</li>
	<li>
		<a href="{{ url('mbapm/fiftyfive') }}">Day 55</a>
	</li>
	<li>
		<a href="{{ url('mbapm/sixtyfive') }}">Day 65</a>
	</li>
</ul>
@endsection