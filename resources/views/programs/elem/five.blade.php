@extends('layouts.responsive')

@section('content')
<h3>Day 5 - Subject: Start your application today!</h3>
<p>Dear @{{First}},</p>

<p>
	<a href="https://youtu.be/YQIXYYITnZs"><img class="img-right" src="https://goto.msstate.edu/www/images/Distance/Email%20Template/undergrad_admissions_video.png"/></a>
	Start your application for the online Elementary Education program. Here is a short <a href="https://youtu.be/YQIXYYITnZs">video</a> to help you navigate the application process.
</p>

<p>Our online classes fill up quickly. The earlier you submit your admission or readmission application, the better chance you have of getting into the classes that you need.</p>

<p>The semester start dates can be found on the <a href="http://www.registrar.msstate.edu/calendars/academic-calendar/">academic calendar</a>.</p>

<p>As you fill out your application, remember to select <b>Elementary Education (BS)</b> as your major and <b>Center for Distance Education</b> as your campus.</p>

<p>
	Be sure to review the following admission requirements before applying:<br/>
	<a href="http://www.admissions.msstate.edu/freshmen/apply/#admission-requirements">MSU Freshman Admission Requirements</a><br/>
	<a href="http://www.admissions.msstate.edu/transfer/apply/#admission-requirements">MSU Transfer Admission Requirements</a><br/>
</p>

<p>
	Have you attended MSU before but never completed your degree? Students can apply for readmission and have the application fee waived.  Review the <a href="http://www.distance.msstate.edu/elem/admissions">Admission/Readmission Process</a> before applying to the program.
</p>

<p>Thank you for considering Mississippi State for your online degree.</p>
<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.vtate')
@endsection

@section('apply')
	@include('common.apply')
@endsection