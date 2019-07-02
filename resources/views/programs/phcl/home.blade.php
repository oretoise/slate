@extends('layouts.responsive')

@section('content')
<h3>PHCL Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('phcl/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('phcl/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('phcl/five') }}">Day 5</a>
	</li>
	<li>
		<a href="{{ url('phcl/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('phcl/seventeen') }}">Day 17</a>
	</li>
	<li>
		<a href="{{ url('phcl/twentyfour') }}">Day 24</a>
	</li>
	<li>
		<a href="{{ url('phcl/thirtyone') }}">Day 31</a>
	</li>
	<li>
		<a href="{{ url('phcl/thirtyeight') }}">Day 38</a>
	</li>
	<li>
		<a href="{{ url('phcl/fourtyfive') }}">Day 45</a>
	</li>
	<li>
		<a href="{{ url('phcl/fiftytwo') }}">Day 52</a>
	</li>
	<li>
		<a href="{{ url('phcl/fiftynine') }}">Day 59</a>
	</li>
	<li>
		<a href="{{ url('phcl/sixtysix') }}">Day 66</a>
	</li>
</ul>
@endsection