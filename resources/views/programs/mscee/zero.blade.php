@extends('layouts.mjml')

@section('content')
<h3>Day 0 - Subject: Thank you for checking out MSU's online Master of Science / PhD in Civil Engineering program!</h3>

<img class="img-right" width="350px" src="https://goto.msstate.edu/www/images/Distance/programs/cee/cee_1.jpg" />

<p>Dear @@{{First}},</p>

<p>Thank you for checking out MSU's online Master of Science in Civil Engineering degree.</p>
<p>This degree has both thesis (30 hours) and non-thesis (33 hours) options. Programs of study are personalized to the individual student.  This program allows students to specialize their program of study in the following areas:</p>

<ul>
	<li>Construction Engineering and Management</li>
	<li>Construction Materials Engineering</li>
	<li>Environmental Engineering</li>
	<li>Geotechnical Engineering</li>
	<li>Structural Engineering</li>
	<li>Transportation Engineering</li>
	<li>Water Resources Engineering</li>
</ul>

<p>See how you can get started by:</p>
<ul>
	<li>Reviewing the <a href="https://online.msstate.edu/mscee#program-structure">program structure</a>.</li>
	<li>Reviewing the <a href="https://www.cee.msstate.edu/wp-content/uploads/CEE-Graduate-Policy.pdf">CEE Graduate Studies Policy</a>.</li>
	<li>Requesting information about your desired area of study.</li>
</ul>

<p>Application deadlines for online students at Mississippi State are as follows:</p>
<p>
Fall Admission Deadline:  <b>March 15</b><br/>
Spring Admission Deadline:  <b>September 15</b><br/>
Summer Admission Deadline:  <b>January 15</b>
</p>
<p>*Note: Applications for the off-campus M.S. in Civil Engineering degree program may be considered for review up to two months after the above deadlines.</p>

<p>Because MSU is accredited by the Southern Association of Colleges and Schools Commission on Colleges (SACSCOC) and the Accreditation Board for Engineering and Technology, Inc. (ABET), your courses will meet the same standards as on-campus courses.  Also, your online degree will not be differentiated from an on-campus degree.</p>
<p>Are you <a href="https://online.msstate.edu/mscee#admissions-process">ready to apply</a>? If you have any questions or concerns, please contact us. We are ready to help.
<p>All the best,</p>
@endsection

@section('signature')
@include('signatures.arijal_swann')
@endsection

@section('apply')
	@include('common.apply')
@endsection