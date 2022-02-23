@extends('layouts.mjml')

@section('content')
<h3>Day 7 - Subject: Start your application today!</h3>
<p>Dear @@{{First}},</p>

<a href="https://youtu.be/-gzq528lad0"><img class="img-right" src="https://goto.msstate.edu/www/images/Distance/Email%20Template/grad_admissions_video.png" /></a>

<p>Start your application for the online Master of Science in Conservation Education program today! Here is a short <a href="https://youtu.be/-gzq528lad0">video</a> to help you navigate the application process.</p>

<p>Remember to choose <span style="color: #5D1725;"><b>Master of Science in Conservation Education</b></span> as your Major and <span style="color: #5D1725;"><b>Online Education</b></span> as your campus when applying for <a href="https://apply.grad.msstate.edu/">admission or readmission</a>.

<p>Your application must be submitted by the semester deadline in which you plan to enroll:

<ul>
	<li>Fall Admission Deadline:  <b>August 1</b></li>
	<li>Spring Admission Deadline:  <b>December 1</b></li>
	<li>Summer Admission Deadline:  <b>May 15</b></li>
</ul>

<p>If you have any questions, just ask. We are happy to help.</p>
<p>Thank you for considering Mississippi State for your online degree.</p>
<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.dknox_hines')
@endsection

@section('apply')
	@include('common.apply')
@endsection