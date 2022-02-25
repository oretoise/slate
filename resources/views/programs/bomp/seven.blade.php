@extends('layouts.mjml')

@section('content')
<h3>Day 7 - Subject: Start your application today!</h3>
<p>Dear @@{{First}},</p>

<p>
	<a href="https://youtu.be/YQIXYYITnZs"><img class="img-right" src="https://goto.msstate.edu/www/images/Distance/Email%20Template/undergrad_admissions_video.png"/></a>
	Start your application for the BOMP program.  Here is a short <a href="https://youtu.be/YQIXYYITnZs">video</a> to help you navigate the application process.
</p>

<p>Our online classes fill up quickly. The earlier you submit your admission or readmission application, the better chance you have of getting into the classes that you need.</p>

<p>Your application must be submitted by <b>August 1st</b> to be considered for fall admission. New students must begin taking the meteorology courses in the fall semester.</p>

<p>If you have any questions, just ask.  I'm happy to help!</p>
@endsection

@section('signature')
	@include('signatures.jbailey')
@endsection

@section('apply')
	@include('common.apply')
@endsection