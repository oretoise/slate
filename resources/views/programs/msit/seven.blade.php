@extends('layouts.mjml')

@section('content')
<h3>Day 7 - Subject: Start your application today!</h3>
<p>Dear @@{{First}},</p>

<a href="https://youtu.be/-gzq528lad0"><img class="img-right" src="https://goto.msstate.edu/www/images/Distance/Email%20Template/grad_admissions_video.png" /></a>

<p>Start your application for the online MSIT program today! Keep in mind the application deadlines, and remember, the earlier you submit your application, the better chance you have of getting into the classes you need.</p>

<p>
    Your application must be submitted by the semester deadline in which you plan to enroll.<br/>
    Fall semester:		July 1<br/>
    Spring semester:	November 1<br/>
    Summer semester:	April 1
</p>

<p>As you fill out your application, remember to select <b>Instructional Technology (MS)</b> as your major and <b>Online Education</b> as your campus.</p>

<p>We've provided a short video to help you start your application.</p>

<p>If you have any questions, don't hesitate to ask me. I'd be happy to help.</p>
<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.vtate')
@endsection

@section('apply')
	@include('common.apply')
@endsection