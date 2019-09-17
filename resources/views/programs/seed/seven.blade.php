@extends('layouts.mjml')

@section('content')
<h3>Day 7 - Subject: Start your SEED application today!</h3>
<p>Dear @@{{First}},</p>

<a href="https://youtu.be/-gzq528lad0"><img class="img-right" src="https://goto.msstate.edu/www/images/Distance/Email%20Template/grad_admissions_video.png" /></a>

<p>Start your application for the online Master of Science in Secondary Education (SEED) today! Remember, the earlier you submit your application, the better chance you have of getting into the classes you need.</p>

<p>We've provided a short video to help you navigate the process.</p>
<p>Your application must be submitted by the semester deadline in which you plan to enroll.</p>
<p>
    Fall semester: 		<b>August 1</b>
    Spring semester:	<b>December 1</b>
    Summer semester:	<b>May 15</b>
</p>

<p>As you fill out your application, remember to select Master of Science in Secondary Education (SEED) as your major and Online Education as your campus.</p>

<p>Please note that your application will not be considered until all forms have been submitted and your application fee has been paid.  Review the admissions process to determine what materials you need to apply for the SEED program.</p>

<p>If you have any questions, don't hesitate to ask me. I'm happy to help!</p>
<p>Thank you,</p>
@endsection

@section('signature')
	@include('signatures.vtate')
@endsection

@section('apply')
	@include('common.apply')
@endsection