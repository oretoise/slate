@extends('layouts.mjml')

@section('content')
<h3>Day 10 - Subject: Start your application today!</h3>
<a href="https://youtu.be/-gzq528lad0"><img class="img-right" src="https://goto.msstate.edu/www/images/Distance/Email%20Template/grad_admissions_video.png" /></a>

<p>Dear @@{{First}},</p>
<p>Start your application for the online <b>Ph.D. ISWD</b> today! Keep in mind the application deadlines listed below and remember the earlier you submit your admission or readmission application, the better chance you have of getting into the classes that you need. </p>

<p>Your application must be submitted by the semester deadline in which you plan to enroll.</p>

<p>
	Summer semester: <b>May 15</b><br/>
    Fall semester: <b>August 1</b><br/>
    Spring semester: <b>December 1</b>
</p>

<p>As you fill out your application, remember to select <b>Instructional Systems and Workforce Development</b> as your major and <b>Online Education</b> as your campus.</p>
<p>If you have any questions, don't hesitate to ask me. I'm happy to help!</p>
<p>Thank you,</p>
@endsection

@section('signature')
	@include('signatures.vtate')
@endsection

@section('apply')
	@include('common.apply')
@endsection