@extends('layouts.mjml')

@section('content')
<h3>Day 5 - Subject: Apply now!</h3>
<p>Dear @@{{First}},</p>
<a href="https://youtu.be/-gzq528lad0"><img class="img-right" src="https://goto.msstate.edu/www/images/Distance/Email%20Template/grad_admissions_video.png" /></a>

<p>Start your application for the online MATCED program today!  Keep in mind the application deadlines, and remember, the earlier you submit your application, the better chance you have of getting into the classes you need.</p>

<p>Your application must be submitted by the semester deadline in which you plan to enroll:</p>

<p>
    Fall semester: <b>August 1</b><br/>
    Spring semester: <b>December 1</b><br/>
    Summer semester:  <b>May 15</b>
</p>

<p>Remember to select Master of Arts in Teaching in Community College Education (MATCED) as your major and Online Education as your campus when applying for <a href="https://online.msstate.edu/matced/admissions-process">admission</a>.</p>

<p>If you have any questions, don’t hesitate to ask me. I'd be happy to help.</p>
<p>Thank you,</p>
@endsection

@section('signature')
	@include('signatures.sclardy')
@endsection

@section('apply')
	@include('common.apply')
@endsection