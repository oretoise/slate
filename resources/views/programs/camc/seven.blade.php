@extends('layouts.mjml')

@section('content')
<h3>Day 7 - Subject: Start your application today!</h3>

<p>Dear @@{{First}},</p>

<a href="https://youtu.be/-gzq528lad0"><img class="img-right" src="https://goto.msstate.edu/www/images/Distance/Email%20Template/grad_admissions_video.png" /></a>

<p>Start your application for the online Companion Animal Management Certificate today!</p>


<p>Remember to choose <span style="color: #5D1725;"><b>Special Non-Degree or Undeclared or Unclassified</b></span> as your Major and <span style="color: #5D1725;"><b>Online Education</b></span> as your campus when applying for <a href="https://online.msstate.edu/{{ $program }}#admissions-process">admission or readmission</a>.  

<p>If you applying as a <b>GRADUATE</b> student, your application must be submitted by the semester deadline in which you plan to enroll:

<ul>
	<li>Fall Admission Deadline:  <b>August 1</b></li>
	<li>Spring Admission Deadline:  <b>December 1</b></li>
	<li>Summer Admission Deadline:  <b>May 15</b></li>
</ul>

<p>If you have any questions, just ask. I am happy to help.</p>
<p>Thank you for considering Mississippi State for your online degree.</p>
<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.mwolfe')
@endsection

@section('apply')
	@include('common.apply')
@endsection