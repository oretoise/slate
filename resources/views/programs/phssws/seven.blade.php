@extends('layouts.mjml')

@section('content')
<h3>Day 7 - Subject: Start your application today!</h3>
<p>Dear @@{{First}},</p>

<a href="https://youtu.be/-gzq528lad0"><img class="img-right" src="https://goto.msstate.edu/www/images/Distance/Email%20Template/grad_admissions_video.png" /></a>

<p>Start your application for the online online Doctor of Philosophy in Plant and Soil Science with a concentration in Weed Science program today! Here is a short <a href="https://youtu.be/-gzq528lad0">video</a> to help you navigate the application process.</p>

<p>Remember to choose <span style="color: #5D1725;"><b>online Doctor of Philosophy in Plant and Soil Science with a concentration in Weed Science</b></span> as your Major and <span style="color: #5D1725;"><b>Online Education</b></span> as your campus when applying for <a href="https://online.msstate.edu/phssws#admissions-process">admission or readmission</a>.

<p>Your application must be submitted by the semester deadline in which you plan to enroll:


<p>If you have any questions, just ask. We are happy to help.</p>
<p>Thank you for considering Mississippi State for your online degree.</p>
<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.mwolfe')
@endsection

@section('apply')
	@include('common.apply')
@endsection