@extends('layouts.mjml')

@section('content')
<h3>Day 0 - Subject: Thank you for checking out MSU's online Master of Science / PhD in Aerospace Engineering program!</h3>

<img class="img-right" width="350px" src="https://goto.msstate.edu/www/images/Distance/programs/ase/ase_1.png" />

<p>Dear @@{{First}},</p>

<p>Thank you for checking out MSU's online Master of Science in Aerospace Engineering degree.  
This 30-credit hour degree has both thesis and non-thesis options.</p>
<p>The major areas of study include the following:</p>
<ul>
	<li>Aeroacoustics</li>
	<li>Aerodynamics</li>
	<li>Aeroelasticity</li>
	<li>Autonomous systems</li>
	<li>Structures and composites</li>
	<li>Computational fluid dynamics</li>
	<li>Design optimization</li>
	<li>Fatigue and fracture</li>
	<li>Fluid structure interaction</li>
	<li>Guidance and control</li>
	<li>Nondestructive Evaluation</li>
</ul>
<p>See how you can get started by:</p>
<ul>
	<li>Reviewing the <a href="https://online.msstate.edu/msase#program-structure">program structure</a>.</li>
	<li>Requesting information about your desired area of study.</li>
</ul>

<p>Application deadlines for online students at Mississippi State are as follows:</p>
<p>Fall Admission Deadline:  <b>June 1</b><br/>
Spring Admission Deadline:  <b>November 1</b><br/>
Summer Admission Deadline:  <b>May 1</b></p>
<p>Because MSU is accredited by the Southern Association of Colleges and Schools Commission on Colleges (SACSCOC) and the Accreditation Board for Engineering and Technology, Inc. (ABET), your courses will meet the same standards as on-campus courses.  Also, your online degree will not be differentiated from an on-campus degree.</p>
<p>Are you <a href="https://online.msstate.edu/msase#admissions-process">ready to apply</a>? If you have any questions or concerns, please contact us. We are ready to help.</p>
<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.mwolfe_swann')
@endsection

@section('apply')
	@include('common.apply')
@endsection