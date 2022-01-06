@extends('layouts.mjml')

@section('content')
<h3>Day 10 - Subject: Apply now!</h3>
<p>Dear @@{{First}},</p>
<p>Start your application for admission to the online Vision Specialist certificate program!</p>
<a href="https://youtu.be/-gzq528lad0"><img class="img-right" src="https://goto.msstate.edu/www/images/Distance/Email%20Template/grad_admissions_video.png" /></a>

<p>The earlier you submit your admission or readmission application, the better chance you have of getting into the classes that you need.</p>

<p>The VSP program begins in the spring semester (January) and continues through the summer and fall semesters.  Semester start dates can be found on the <a href="http://www.registrar.msstate.edu/calendars/academic-calendar/">academic calendar</a>.</p>
<p>If you haven't applied yet and are ready to get started, as you fill out your application, remember to select <b>Graduate Unclassified</b> as your major and <b>Online Education</b> as your campus. We've provided a short <a href="https://youtu.be/-gzq528lad0">video</a> to help you navigate the application process.</p>
<p>Please note that your application will not be considered until all forms have been submitted and your application fee has been paid.  The deadline for applying is <b>October 1st</b>.</p>
<p>If you have any questions, don't hesitate to ask me. I'd be happy to help.</p>
<p>Thanks,</p>
@endsection

@section('signature')
	@include('signatures.sclardy')
@endsection

@section('apply')
	@include('common.apply')
@endsection