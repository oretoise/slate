@extends('layouts.mjml')

@section('content')
<h3>Day 0 - Subject: Thank you for checking out MSU's online Master of Science / PhD in Engineering with a concentration in Mechanical Engineering program!</h3>

<img class="img-right" width="350px" src="https://goto.msstate.edu/www/images/Distance/programs/me/me_1.jpg" />

<p>Dear @@{{First}},</p>

// PhD

<p>Thank you for checking out MSU’s online Doctor of Philosophy in Engineering with a concentration in Mechanical Engineering degree.</p>

<p>This 64-credit hour degree includes 42 hours of coursework, 2 hours of graduate seminar and 20 hours of Dissertation and Research. This program allows for flexibility towards tailoring the degree program to the program of study, consistent with the goals of the topic under study and the unique interests and capabilities of each student.</p>

<p>See how you can get started by:</p>

<ul>
	<li>Reviewing the <a href="https://online.msstate.edu/me/phd-program/">program structure</a>.</li>
	<li>Requesting information about your desired area of study</li>
</ul>

// MS

<p>This 31-credit hour degree has both thesis and non-thesis options. The major areas of study include the following:</p>
<ul>
	<li>Fluid Mechanics</li>
	<li>Solid Mechanics</li>
	<li>Energy Systems</li>
	<li>Thermal Sciences</li>
	<li>Materials and Manufacturing</li>
	<li>Mechanical Design</li>
	<li>System Dynamics</li>
</ul>

<p>See how you can get started by:</p>
<ul>
	<li>Reviewing the <a href="https://online.msstate.edu/me/masters-program/">program structure</a>.</li>
	<li>Requesting information about your desired area of study</li>
</ul>

<p>Application deadlines for online students at Mississippi State are as follows:</p>

<p>
	Fall Admission Deadline:  <b>August 1</b><br/>
	Spring Admission Deadline:  <b>December 1</b><br/>
	Summer Admission Deadline:  <b>May 15</b>
</p>

<p>Because MSU is accredited by the Southern Association of Colleges and Schools Commission on Colleges (SACSCOC) and the Accreditation Board for Engineering and Technology, Inc. (ABET), your courses will meet the same standards as on-campus courses.  Also, your online degree will not be differentiated from an on-campus degree.</p>

<p>Are you <a href="https://online.msstate.edu/me/admissions-process/">ready to apply</a>? If you have any questions or concerns, please contact us. We are ready to help.</p>
<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.dknox_swann')
@endsection

@section('apply')
	@include('common.apply')
@endsection