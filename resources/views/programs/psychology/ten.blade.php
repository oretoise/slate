@extends('layouts.mjml')

@section('content')
<h3>Day 10 - Subject: Start your application today!</h3>
<p>Dear @@{{First}},</p>

<p>
	<a href="https://youtu.be/YQIXYYITnZs"><img class="img-right" src="https://goto.msstate.edu/www/images/Distance/Email%20Template/undergrad_admissions_video.png"/></a>
	Start your application for the online Psychology degree program.  Here is a short <a href="https://youtu.be/YQIXYYITnZs">video</a> to help you navigate the application process.
</p>

<p>
	Remember to choose <span style="color: #800000;"><b>Psychology (BS)</b></span> as your major and <span style="color: #800000;"><b>Online Education</b></span> as your campus when applying for <a href="https://online.msstate.edu/psychology#admissions-process"admission or readmission</a>.
</p>

<p>If you have any questions, ask. We are happy to help.</p>
<p>Thank you for considering Mississippi State for your online degree.</p>
@endsection

@section('signature')
	@include('signatures.psychology')
@endsection

@section('apply')
	@include('common.apply')
@endsection