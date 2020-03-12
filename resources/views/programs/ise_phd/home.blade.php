@extends('layouts.mjml')

@section('content')
<h3>ISE_PHD Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('ise_phd/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('ise_phd/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('ise_phd/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('ise_phd/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('ise_phd/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('ise_phd/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('ise_phd/thirtyfive') }}">Day 35</a>
	</li>
	<li>
		<a href="{{ url('ise_phd/fourtyseven') }}">Day 47</a>
	</li>
	<li>
		<a href="{{ url('ise_phd/fiftyfive') }}">Day 55</a>
	</li>
</ul>
@endsection