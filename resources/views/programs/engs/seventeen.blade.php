@extends('layouts.mjml')

@section('content')
<h3>Day 17 - Subject: Meet your coordinator!</h3>
<p>Dear @@{{First}},</p>

<img class="img-right" src="https://goto.msstate.edu/www/images/Distance/staff/joy_bailey.png" />

<p>I'm Joy, your program coordinator of the Environmental Geosciences Program!</p>
<p>My goal is to make your online education experience with Mississippi State University a positive and rewarding one.  I'm here to assist you with any questions you may have.</p>
<p>I look forward to working with you.  Feel free to contact me by email at <a href="mailto:joy.bailey@msstate.edu">joy.bailey@msstate.edu</a> or by phone at 662.325.9684.</p>
<p>Hail State!</p>
@endsection

@section('signature')
	@include('signatures.jbailey')
@endsection

@section('apply')
	@include('common.apply')
@endsection