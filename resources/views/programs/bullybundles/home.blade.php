@extends('layouts.mjml')

@section('content')
<h3>BullyBundle Mailings</h3>
<ul>
	<li>
		<a href="{{ url('bullybundles/one') }}">First Email (per semester)</a>
	</li>
	<li>
		<a href="{{ url('bullybundles/two') }}">Second Email (per semester)</a>
	</li>
</ul>
@endsection
