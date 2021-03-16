@extends('layouts.mjml')

@section('content')
<h3>Day 0 - Subject: Thank you for checking out MSU's online Master of Science / PhD in Aerospace Engineering program!</h3>

<img class="img-right" width="350px" src="https://goto.msstate.edu/www/images/Distance/programs/ase/ase_1.png" />

<p>Dear @@{{First}},</p>

// MS
<p>Thank you for checking out MSU’s online Master of Science in Aerospace Engineering degree.  
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
	<li>Reviewing the <a href="https://online.msstate.edu/ase/masters-program/">program structure</a>.</li>
	<li>Requesting information about your desired area of study.</li>
</ul>
// end MS // PhD

<p>Thank you for checking out MSU’s online Doctor of Philosophy in Engineering with a concentration in Aerospace Engineering degree.</p>
<p>This degree prepares students to enter academia as a faculty member or for a rewarding career as a researcher in industry or government. The degree structure is comprised of a minimum of 50 hours of course work beyond the master’s degree, of which 20 hours is devoted toward dissertation research.</p>
<p>See how you can get started by:</p>
<ul>
	<li>Reviewing the <a href="https://online.msstate.edu/ase/phd-program/">program structure</a>.</li>
	<li>Requesting information about your desired area of study.</li>
</ul>
// end PhD

<p>Application deadlines for online students at Mississippi State are as follows:</p>
<p>Fall Admission Deadline:  <b>August 1</b><br/>
Spring Admission Deadline:  <b>December 1</b><br/>
Summer Admission Deadline:  <b>May 15</b></p>
<p>Because MSU is accredited by the Southern Association of Colleges and Schools Commission on Colleges (SACSCOC) and the Accreditation Board for Engineering and Technology, Inc. (ABET), your courses will meet the same standards as on-campus courses.  Also, your online degree will not be differentiated from an on-campus degree.</p>
<p>Are you <a href="https://online.msstate.edu/ase/admissions-process/">ready to apply</a>? If you have any questions or concerns, please contact us. We are ready to help.</p>
<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.dknox_swann')
@endsection

@section('apply')
	@include('common.apply')
@endsection