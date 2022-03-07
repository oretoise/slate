@extends('layouts.mjml')

@section('content')
<h3>Day 0 - Subject: Thank you for checking out MSU's online Doctor of Philosophy in Engineering with a concentration in Engineering Education program!</h3>

<img class="img-right" src="https://goto.msstate.edu/www/images/Distance/programs/engineeringed/engineeringed1.jpg" width="350px" alt="Teacher instructing students in classroom."/>

<p>Dear @@{{First}},</p>

<p>Thank you for checking out MSU's online Doctor of Philosophy in Engineering with a concentration in Engineering Education degree.</p>
<p>This degree requires 68-69 credit hours to complete. Programs of study are personalized to the individual student and include coursework in Engineering Education as well as other Engineering graduate areas of study.</p>

<p>See how you can get started by:
	<ul>
		<li>Reviewing the <a href="https://online.msstate.edu/engineeringed#program-structure">program structure</a>.</li>
		<li>Requesting information about your desired area of study.</li>
	</ul>
</p>

<p>Application deadlines for online students at Mississippi State are as follows:</p>

<p>Fall Admission Deadline:  <b>June 1</b><br/>
Spring Admission Deadline:  <b>November 1</b><br/>
Summer Admission Deadline:  <b>May 1</b></p>

<p>Because MSU is accredited by the Southern Association of Colleges and Schools Commission on Colleges (SACSCOC) and the Accreditation Board for Engineering and Technology, Inc. (ABET), your courses will meet the same standards as on-campus courses.  Also, your online degree will not be differentiated from an on-campus degree.</p>
<p>Are you <a href="https://online.msstate.edu/engineeringed#admissions-process">ready to apply</a>? If you have any questions or concerns, please contact us. We are ready to help.

All the best,

@endsection

@section('signature')
	@include('signatures.dknox_swann')
@endsection

@section('apply')
	@include('common.apply')
@endsection