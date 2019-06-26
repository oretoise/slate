@extends('layouts.responsive')

@section('content')
<h3>Day 0 - Subject: Thank you for checking out MSU’s online Psychology program!</h3>
<p>Dear @{{First}},</p>

<p>
	<img class="img-right" src="https://goto.msstate.edu/www/images/Distance/programs/psychology/psychology_1.png" />
	Thank you for checking out MSU's online Bachelor of Science (BS) in Psychology degree program.
</p>

<p>
	The BS in Psychology degree program is designed both for students who want to complete or start their degree completely online.
</p>

<p>
	<b>What can you do with a BS in Psychology?</b><br/>
	A BS in Psychology degree online opens doors to many career opportunities, including:
</p>

<ul>
	<li>Behavioral Analysis</li>
	<li>Counseling</li>
	<li>Social Work</li>
	<li>Correction Counselor Trainees</li>
	<li>Probation Officers</li>
	<li>Business/Human Resources</li>
	<li>Public Affairs</li>
	<li>Employment Counselors</li>
	<li>Plus, as the starting point for obtaining advanced degrees in Psychology and other areas</li>
</ul>

<p>Check out how you can get started by:</p>
<ul>
	<li>Reviewing our program curriculum information</li>
	<li>Requesting a free transcript evaluation</li>
</ul>

<p>Students can transfer applicable and approved coursework from accredited community colleges and/or four-year institutions into the Psychology degree too.</p>

<p>Because MSU is accredited by the Southern Association of Colleges and Schools Commission on Colleges (SACSCOC), your courses will meet the same standards as on-campus courses. Also, your online degree will not be differentiated from an on-campus degree.</p>

<p>Are you <a href="http://distance.msstate.edu/psychology/admissions">ready to apply</a>? If you have any questions or concerns, please contact us. We are ready to help.

@endsection

@section('signature')
	@include('signatures.ehawkins')
@endsection

@section('apply')
	@include('common.apply')
@endsection