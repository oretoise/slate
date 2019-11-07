@extends('layouts.mjml')

@section('content')
<h3>Day 7 - Subject: Meet the General Biology Program Coordinator</h3>

<p>Greetings, @@{{First}},</p>

<p>
	<img class="img-right" src="https://goto.msstate.edu/www/images/Distance/staff/joy_bailey.png" />
	I'm Joy, the program coordinator of the Master of Science in General Biology Certificate program!
</p>

<p>As your coordinator, my goal is to make your distance education experience with Mississippi State University a positive and rewarding one.  I'm here to assist you with any questions you may have.</p>

<p>I look forward to working with you.  Feel free to contact me by email at <a href="mailto:joy.bailey@msstate.edu">joy.bailey@msstate.edu</a> or by phone at 662.325.9684.</p>

<p>Hail State!</p>
@endsection

@section('signature')
	@include('signatures.jbailey')
@endsection

@section('apply')
	@include('common.apply')
@endsection