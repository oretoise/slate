@extends('layouts.mjml')

@section('content')
<h3>Day 10 - Subject: Apply now!</h3>
<p>Dear @@{{First}},</p>

<a href="https://youtu.be/-gzq528lad0"><img class="img-right" src="https://goto.msstate.edu/www/images/Distance/Email%20Template/grad_admissions_video.png" /></a>

<p>Start your application for the online Master of Science in Educational Leadership with a concentration in School Administration (EDLD-EDLS) program.</p>

<p>Keep in mind the deadlines listed below, and remember the earlier you submit your application, better chance you have of getting into the classes that you need.</p>

<p>Your application must be submitted by the semester deadline in which you plan to enroll.</p>

<p>
    Fall semester: 		<b>August 1</b><br/>
    Spring semester:	<b>December 1</b><br/>
    Summer semester:	<b>May 15</b>
</p>

<p>I've provided a short video to help you get started on your application.</p>

<p>As you fill out your application, remember to select <b><span style="color: #800000;">Educational Leadership (EDLD)</span></b> as your major and select School Administration (EDLS) as your concentration and <b><span style="color: #800000;">Online Education</span></b> as your campus.</p>

<p>If you have any questions, please reach out to me. I'm happy to help.</p>
<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.sclardy')
@endsection

@section('apply')
	@include('common.apply')
@endsection