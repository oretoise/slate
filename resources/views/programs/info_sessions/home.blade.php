@extends('layouts.mjml')

@section('content')
<h3>Info Session Mailings</h3>
<ul>
	<li>
		<a href="{{ url('info_sessions/two') }}">Day 2 Email (All Communication Plans)</a>
	</li>
	<li>
		<a href="{{ url('info_sessions/example') }}">Example Announcement/Invitation Email</a>
	</li>
</ul>
@endsection
