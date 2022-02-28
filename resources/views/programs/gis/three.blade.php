@extends('layouts.mjml')

@section('content')
<h3>Day 3 - Subject: Meet the GIS Program Coordinator!</h3>
<img class="img-right" src="https://goto.msstate.edu/www/images/Distance/staff/joy_bailey.png" />

<p>Dear @@{{First}},</p>

<p>As the program coordinator, my goal is to make your online education experience with Mississippi State University a positive and rewarding one.  I'm here to assist you with any questions you may have.</p>
<p>I look forward to working with you.  Feel free to contact me by email at <a href="mailto:joy.bailey@msstate.edu">joy.bailey@msstate.edu</a> or by phone at <a href="tel:662.325.9684">662.325.9684</a>.</p>
<p>Ready to apply? Check out the <a href="https://online.msstate.edu/gis#admissions-process">admission requirements</a> for the GIS certificate today!</p>
<p>Hail State!</p>
@endsection

@section('signature')
	@include('signatures.jbailey')
@endsection

@section('apply')
	@include('common.apply')
@endsection