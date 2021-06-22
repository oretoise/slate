@extends('layouts.mjml')

@section('content')
<h3>GMAT Purchase Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('gmat_purchases/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('gmat_purchases/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('gmat_purchases/nine') }}">Day 9</a>
	</li>
	<li>
		<a href="{{ url('gmat_purchases/twelve') }}">Day 12</a>
	</li>
</ul>
@endsection