@extends('layouts.mjml')

@section('content')
<<h3>Day 0 - Subject: Thank you for checking out MSU's online Master of Science in Computational Engineering program!</h3>

<img class="img-right" width="350px" src="https://goto.msstate.edu/www/images/Distance/programs/cme/cme_1.jpg" />

<p>Dear @@{{First}},</p>

<p>Thank you for checking out MSU's online Master of Science in Computational Engineering degree.</p>
<p>This degree has both thesis (30 hours) and non-thesis (33 hours) options. Programs of study are personalized to the individual student.  Many classes in computational engineering are taken through the departments of Aerospace, Mechanical Engineering, Computer Science, Math, and others.</p>

<p>See how you can get started by:</p>
<ul>
	<li>Reviewing the <a href="https://online.msstate.edu/mscme#program-structure">program structure</a>.</li>
	<li>Requesting information about your desired area of study.</li>
</ul>

<p>Application deadlines for online students at Mississippi State are as follows:</p>
<p>Fall Admission Deadline:  <b>June 1</b><br/>
Spring Admission Deadline:  <b>November 1</b><br/>
Summer Admission Deadline:  <b>May 1</b></p>

<p>Because MSU is accredited by the Southern Association of Colleges and Schools Commission on Colleges (SACSCOC) and the Accreditation Board for Engineering and Technology, Inc.(ABET), your courses will meet the same standards as on-campus courses.  Also, your online degree will not be differentiated from an on-campus degree.</p>

<p>Are you <a href="https://online.msstate.edu/mscme#admissions-process">ready to apply</a>? If you have any questions or concerns, please contact us. We are ready to help.</p>

<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.mwolfe_swann')
@endsection

@section('apply')
	@include('common.apply')
@endsection