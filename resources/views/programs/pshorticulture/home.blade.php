@extends('layouts.mjml')

@section('content')
<h3>MS Agronomy Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('pshorticulture/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('pshorticulture/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('pshorticulture/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('pshorticulture/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('pshorticulture/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('pshorticulture/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('pshorticulture/thirtyfive') }}">Day 35</a>
	</li>
	<li>
		<a href="{{ url('pshorticulture/fourtyseven') }}">Day 47</a>
	</li>
	<li>
		<a href="{{ url('pshorticulture/fiftyfive') }}">Day 55</a>
	</li>
</ul>
@endsection