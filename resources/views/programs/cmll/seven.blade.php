@extends('layouts.mjml')

@section('content')
<h3>Day 7 - Subject: Meet the Foreign Languages Program Coordinator!</h3>
<img class="img-right" src="https://goto.msstate.edu/www/images/Distance/staff/joy_bailey.png" />

<p>Dear @@{{First}},</p>

<p>As the program coordinator, my goal is to make your online education experience with Mississippi State University a positive and rewarding one.  I'm here to assist you with any questions you may have.</p>
<p>I look forward to working with you.  Feel free to contact me by email at <a href="mailto:joy.bailey@msstate.edu">joy.bailey@msstate.edu</a> or by phone at <a href="tel:662.325.9684">662.325.9684</a>.</p>
<p>Ready to Apply? Check out the <a href="https://online.msstate.edu/cmll#admissions-process">admission requirements</a> for the Master of Arts in Foreign Languages degree.</p>
<p>Hail State!</p>
@endsection

@section('signature')
	@include('signatures.jbailey')
@endsection

@section('apply')
	@include('common.apply')
@endsection