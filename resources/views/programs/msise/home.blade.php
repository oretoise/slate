@extends('layouts.mjml')

@section('content')
<h3>MSISE Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('msise/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('msise/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('msise/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('msise/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('msise/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('msise/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('msise/thirtyfive') }}">Day 35</a>
	</li>
	<li>
		<a href="{{ url('msise/fourtyseven') }}">Day 47</a>
	</li>
	<li>
		<a href="{{ url('msise/fiftyfive') }}">Day 55</a>
	</li>
</ul>
@endsection