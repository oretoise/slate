@extends('layouts.mjml')

@section('content')
<h3>PPC Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('ppc/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('ppc/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('ppc/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('ppc/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('ppc/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('ppc/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('ppc/thirtyfive') }}">Day 35</a>
	</li>
	<li>
		<a href="{{ url('ppc/fourtyseven') }}">Day 47</a>
	</li>
	<li>
		<a href="{{ url('ppc/fiftyfive') }}">Day 55</a>
	</li>
	<li>
		<a href="{{ url('ppc/sixty') }}">Day 60</a>
	</li>
</ul>
@endsection