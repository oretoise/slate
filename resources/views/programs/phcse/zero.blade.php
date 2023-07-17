@extends('layouts.mjml')

@section('content')
<h3>Day 0 - Subject: Thank you for checking out MSU's online Master of Science / PhD in Computer Science program!</h3>

<img class="img-right" width="350px" src="https://goto.msstate.edu/www/images/Distance/programs/cse/cse_1.png" />

<p>Dear @@{{First}},</p>

<p>Thank you for checking out MSU's online Doctor of Philosophy in Computer Science degree.</p>
<p>This degree is a 63-credit program designed to be completed in 4 years for traditional students. Students with a previous M.S. must only complete 32 hours of post master's coursework. Working with a major professor and guiding committee, students will select appropriate core, specialization, and elective courses and develop a research program. Preparedness for research work will be measured via examinations and defended before a body of peers in the dissertation defense.</p>
<p>Recent graduates have also gone to work for employers such as:</p>

<ul>
	<li>Microsoft</li>
	<li>Apple</li>
	<li>Google</li>
	<li>Amazon</li>
	<li>Federal Express</li>
	<li>Harris</li>
	<li>Southern Company</li>
	<li>NASA and its contractors</li>
	<li>US Department of Defense and US armed forces</li>
	<li>US Army Corps of Engineers, Engineer Research and Development Center</li>
	<li>Other companies and government agencies</li>
</ul>

<p>See how you can get started by:</p>
<ul>
	<li>Reviewing the <a href="https://online.msstate.edu/phcse#program-structure">program structure</a>.</li>
	<li>Requesting information about your desired area of study</li>
</ul>

<p>Application deadlines for online students at Mississippi State are as follows:</p>
<p>Fall Admission Deadline:  <b>June 1</b><br/>
Spring Admission Deadline:  <b>November 1</b></p>
<p>Because MSU is accredited by the Southern Association of Colleges and Schools Commission on Colleges (SACSCOC) and the Accreditation Board for Engineering and Technology, Inc.(ABET), your courses will meet the same standards as on-campus courses.  Also, your online degree will not be differentiated from an on-campus degree.</p>
<p>Are you <a href="https://online.msstate.edu/phcse#admissions-process">ready to apply</a>? If you have any questions or concerns, please contact us. We are ready to help.</p>
<p>All the best,</p>
@endsection

@section('signature')
@include('signatures.arijal_swann')
@endsection

@section('apply')
	@include('common.apply')
@endsection