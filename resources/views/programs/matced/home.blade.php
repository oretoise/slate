@extends('layouts.mjml')

@section('content')
<h3>MATCED Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('matced/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('matced/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('matced/five') }}">Day 5</a>
	</li>
	<li>
		<a href="{{ url('matced/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('matced/ten') }}">Day 10</a>
	</li>
	<li>
		<a href="{{ url('matced/fifteen') }}">Day 15</a>
	</li>
	<li>
		<a href="{{ url('matced/twentytwo') }}">Day 22</a>
	</li>
	<li>
		<a href="{{ url('matced/thirtytwo') }}">Day 32</a>
	</li>
	<li>
		<a href="{{ url('matced/fourtytwo') }}">Day 42</a>
	</li>
	<li>
		<a href="{{ url('matced/fiftytwo') }}">Day 52</a>
	</li>
	<li>
		<a href="{{ url('matced/sixtytwo') }}">Day 62</a>
	</li>
</ul>
@endsection