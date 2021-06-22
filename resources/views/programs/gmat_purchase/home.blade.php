@extends('layouts.mjml')

@section('content')
<h3>GMAT Purchase Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('gmat_purchase/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('gmat_purchase/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('gmat_purchase/nine') }}">Day 9</a>
	</li>
	<li>
		<a href="{{ url('gmat_purchase/twelve') }}">Day 12</a>
	</li>
</ul>
@endsection