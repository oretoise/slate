@extends('layouts.mjml')

@section('content')
<h3>Day 10 - Subject: Apply now!</h3>
<p>Dear @@{{First}},</p>

<a href="https://youtu.be/-gzq528lad0"><img class="img-right" src="https://goto.msstate.edu/www/images/Distance/Email%20Template/grad_admissions_video.png" /></a>

<p>Start your application for the online PHCL today!  Keep in mind the application deadlines listed below, and remember the earlier you submit your admission or readmission application, the better chance you have of getting into the classes that you need.</p>

<p>Your application must be submitted by the semester deadline in which you plan to enroll:</p>

<p>
    Summer and Fall semesters:   <b>March 1</b><br/>
    Spring semester:    <b>October 1</b>
</p>

<P>We've provided a short video to help you get started on your application.</p>

<p>Remember to select <b>Community College Leadership (PHCL)</b> as your major and <b>Online Education</b> as your campus when applying for admission.</p>

<p>If you have any questions, don't hesitate to ask. I'm happy to help.</p>

<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.vtate')
@endsection

@section('apply')
	@include('common.apply')
@endsection