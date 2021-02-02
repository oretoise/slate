@extends('layouts.mjml')

@section('content')
<h3>Day 3 - Subject: Meet Your Coordinator!</h3>
<img class="img-right" src="https://goto.msstate.edu/www/images/Distance/staff/joy_bailey.png" />

<p>Dear @@{{First}},</p>

<p>I'm Joy, the program coordinator for online undeclared students, and I am here to assist you in finding the courses and program that would best suit your academic plans.</p>
<p>As the program coordinator, my goal is to make your online education experience with Mississippi State University a positive and rewarding one. I look forward to working with you.</p>
<p>I look forward to working with you.  Feel free to contact me by email at <a href="mailto:joy.bailey@msstate.edu">joy.bailey@msstate.edu</a> or by phone at <a href="tel:662.325.9684">662.325.9684</a>.</p>
<p>Hail State!</p>
@endsection

@section('signature')
	@include('signatures.jbailey')
@endsection

@section('apply')
	@include('common.apply_snd')
@endsection