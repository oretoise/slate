@extends('layouts.mjml')

@section('content')
<h3>ASE Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('ase/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('ase/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('ase/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('ase/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('ase/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('ase/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('ase/thirtyfive') }}">Day 35</a>
	</li>
	<li>
		<a href="{{ url('ase/fourtyseven') }}">Day 47</a>
	</li>
	<li>
		<a href="{{ url('ase/fiftyfive') }}">Day 55</a>
	</li>
</ul>
@endsection