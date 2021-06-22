@extends('layouts.mjml')

@section('content')
<h3>Incomplete Application Mailings</h3>
<ul>
	<li>
		<a href="{{ url('incomplete_apps/example') }}">Awaiting Submission Reminder Example</a>
	</li>
	<li>
		<a href="{{ url('incomplete_apps/automatic_materials') }}">Automatic Missing Materials Reminder</a>
	</li>
	<li>
		<a href="{{ url('incomplete_apps/automatic_submission') }}">Automatic Awaiting Submission Reminder (2, 7, 14, 21, 28 days)</a>
	</li>
</ul>
@endsection
