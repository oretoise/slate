@extends('layouts.mjml')

@section('content')
<h3>SND Communication Plan</h3>
<ul>
	<li>
		<a href="{{ url('snd/zero') }}">Day 0</a>
	</li>
	<li>
		<a href="{{ url('snd/three') }}">Day 3</a>
	</li>
	<li>
		<a href="{{ url('snd/seven') }}">Day 7</a>
	</li>
	<li>
		<a href="{{ url('snd/fourteen') }}">Day 14</a>
	</li>
	<li>
		<a href="{{ url('snd/twentyone') }}">Day 21</a>
	</li>
	<li>
		<a href="{{ url('snd/twentyeight') }}">Day 28</a>
	</li>
	<li>
		<a href="{{ url('snd/thirtyfive') }}">Day 35</a>
	</li>
	<li>
		<a href="{{ url('snd/fourtytwo') }}">Day 42</a>
	</li>
</ul>
@endsection