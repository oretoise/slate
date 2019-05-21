@extends('layouts.responsive')

@section('content')
<h3>Day 10 - Subject: Start your application today!</h3>
<p>Dear *|FNAME|*,</p>

<p>
	<a href="https://youtu.be/YQIXYYITnZs"><img class="img-right" src="https://goto.msstate.edu/www/images/Distance/Email%20Template/undergrad_admissions_video.png"/></a>
	Start your application for the online BSIS degree program.  Here is a short <a href="https://youtu.be/YQIXYYITnZs">video</a> to help you navigate the application process.
</p>

<p>
	Remember to choose <b><span style="color: #800000;">Pre-Interdisciplinary Studies (BS)</span></b> as your major and <b><span style="color: #800000;">Center for Distance Education</span></b> as your campus when applying for <a href="http://distance.msstate.edu/bsis/admissions">admission or readmission</a>.
</p>

<p>If you have any questions, ask. We are happy to help.</p>
<p>Thank you for considering Mississippi State for your online degree.</p>
@endsection

@section('signature')
	@include('signatures.ehawkins')
@endsection

@section('apply')
	@include('common.apply')
@endsection