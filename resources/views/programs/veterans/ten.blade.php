@extends('layouts.mjml')

@section('content')
<h3>Day 10 - Subject: Apply today!</h3>
<p>Dear @@{{First}},</p>

<a href="https://youtu.be/YQIXYYITnZs"><img class="img-right" src="https://goto.msstate.edu/www/images/Distance/Email%20Template/undergrad_admissions_video.png"/></a>

<p>Start your application for the online Veterans' Certificate Program (VCP) today!  The earlier you submit your admission or readmission application, the better chance you have of getting into the classes you need.</p>

<p>You can begin the program at the start of any semester.  The semester start dates can be found on the academic calendar.</p>

<p>As you fill out your application, please remember to choose <b>one</b> of the following as your <b>major</b>:</p>

<ul>
    <li><b>Special Non-Degree</b>, if you are not seeking admission to an undergraduate program, but want to take undergraduate-level VCP classes.</li>
    <li><b>Graduate Unclassified</b>, if you are not seeking admission to a graduate program, but want to take graduate-level VCP classes.</li>
    <li><b>Pre-Interdisciplinary Studies (BS)</b>, if you are interested in completing an undergraduate degree with a VCP emphasis area.</li>
</ul>

<p>You'll select <b>Online Education</b> as your campus.</p>

<p>We have provided a short video to help you navigate the application process.
Have you attended MSU before but never completed your degree? Students can apply for Readmission and have the application fee waived.</p>

<p>If you have any questions, don't hesitate to ask me. I will be happy to assist you.</p>
<p>Thanks,</p>
@endsection

@section('signature')
	@include('signatures.arijal')
@endsection

@section('apply')
	@include('common.apply')
@endsection