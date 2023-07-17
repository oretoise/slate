@extends('layouts.mjml')

@section('content')
<h3>Day 0 - Subject: Thank you for checking out MSU's online Master of Science in Cyber Security and Operations program!</h3>

<img class="img-right" width="350px" src="https://goto.msstate.edu/www/images/Distance/programs/cyber/cyber_1.png" />

<p>Dear @@{{First}},</p>
<p>This 31-credit hour degree has both thesis and non-thesis options. The Master of Science in Cyber Security and Operations is designed for students who wish to help meet the challenges posed by increasing cyber-threats. Using a multidisciplinary approach, the program is designed to provide students with a focused education within a broad analytical framework for evaluating, understanding, and solving cyber security problems.   Recognized nationally for its leadership in cyber security, MSU is one of only nine schools in the U.S. to hold all three of the National Security Agency's centers of academic excellence credentials: CAE-Cyber Defense Education, CAE-Cyber Defense Research, and CAE-Cyber Operations.</p>

<p>See how you can get started by:</p>
<ul>
	<li>Reviewing the <a href="https://online.msstate.edu/mscyso#program-structure">program structure</a>.</li>
	<li>Requesting information about your desired area of study.</li>
</ul>

<p>Application deadlines for online students at Mississippi State are as follows:</p>
<p>Fall Admission Deadline:  <b>July 1</b><br/>
Spring Admission Deadline:  <b>November 1</b></p>

<p>Because MSU is accredited by the Southern Association of Colleges and Schools Commission on Colleges (SACSCOC) and the Accreditation Board for Engineering and Technology, Inc. (ABET), your courses will meet the same standards as on-campus courses.  Also, your online degree will not be differentiated from an on-campus degree.</p>

<p>Are you ready to apply? If you have any questions or concerns, please contact us. We are ready to help.</p>
<p>All the best,</p>
@endsection

@section('signature')
@include('signatures.arijal_swann')
@endsection

@section('apply')
	@include('common.apply')
@endsection