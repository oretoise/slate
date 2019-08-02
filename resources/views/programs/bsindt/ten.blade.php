@extends('layouts.mjml')

@section('content')
<h3>Day 10 - Subject: Start your application today!</h3>
<p>Dear @@{{First}},</p>

<p>
	<a href="https://youtu.be/YQIXYYITnZs"><img class="img-right" src="https://goto.msstate.edu/www/images/Distance/Email%20Template/undergrad_admissions_video.png"/></a>
	Start your application for the online INDT program. Here is a short <a href="https://youtu.be/YQIXYYITnZs">video</a> to help you navigate the application process.
</p>

<p>
	Our online classes fill up quickly. The earlier you submit your admission or readmission application, the better chance you have of getting into the classes that you need.
</p>

<p>
	Remember to select <span style="color: #800000;"><b>Industrial Technology (BS)</b></span> as your major and <span style="color: #800000;"><b>Center for Distance Education</b></span> as your campus.
</p>

<p>
	Be sure to select your desired concentration - <span style="color: #800000;"><b>Manufacturing and Maintenance Management</b></span> or <span style="color: #800000;"><b>Industrial Automation</b></span>.
</p>

<p>
	If you have any questions, just ask.  I'm happy to help.
</p>
<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.vtate')
@endsection

@section('apply')
	@include('common.apply')
@endsection