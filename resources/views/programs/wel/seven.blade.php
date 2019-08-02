@extends('layouts.mjml')

@section('content')
<h3>Day 7 - Subject: Start your application today!</h3>
<p>Dear @@{{First}},</p>

<a href="https://youtu.be/-gzq528lad0"><img class="img-right" src="https://goto.msstate.edu/www/images/Distance/Email%20Template/grad_admissions_video.png" /></a>

<p>Start your application for the online WEL program today!  Keep in mind the application deadlines, and remember, the earlier you submit your application the better chance you have of getting into the classes you need.</p>

<p>Your application must be submitted by the semester deadline in which you plan to enroll:</p>

<p>
Fall semester:		<b>August 1</b>
Spring semester:	<b>December 1</b>
Summer semester:	<b>May 15</b>
</p>

<p>Remember to select <b>Workforce Education Leadership (MS)</b> as your major and <b>Center for Distance Education</b> as your campus when applying for admission.</p>

<p>We've provided a short video to help you get started on your application.</p>

<p>If you have any questions, don't hesitate to ask me. I'm happy to help!</p>
<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.vtate')
@endsection

@section('apply')
	@include('common.apply')
@endsection