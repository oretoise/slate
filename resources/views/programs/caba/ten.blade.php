@extends('layouts.mjml')

@section('content')
<h3>Day 10 - Subject: Start your application today!</h3>
<p>Dear @@{{First}},</p>

<a href="https://youtu.be/-gzq528lad0"><img class="img-right" src="https://goto.msstate.edu/www/images/Distance/Email%20Template/grad_admissions_video.png" /></a>

<p>Start your application for the online <b>Applied Behavior Analysis (ABA) Certificate</b> program today! Here is a short <a href="https://youtu.be/-gzq528lad0">video</a> to help you navigate the application process.</p>
<p>Our program only admits students in the Fall semester. Your application must be submitted by May 1st in order to be considered.</p>
<p>Remember to choose <span style="color: #5D1725;"><b>Unclassified</b></span> as your Major and <span style="color: #5D1725;"><b>Online Education</b></span> as your campus when applying for <a href="https://apply.grad.msstate.edu/">admission or readmission</a>. When submitting your application materials, be sure to indicate in your statement of purpose that you are interested in the ABA Certificate program.</p>

<p>If you have any questions, just ask. I am happy to help.</p>
<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.arijal')
@endsection

@section('apply')
	@include('common.apply')
@endsection