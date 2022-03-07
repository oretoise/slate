@extends('layouts.mjml')

@section('content')
<h3>Day 0 - Subject: Thank you for checking out MSU's online Master of Science / PhD in Chemical Engineering program!</h3>

<img class="img-right" width="350px" src="https://goto.msstate.edu/www/images/Distance/programs/chemeng_1.png" />

<p>Dear @@{{First}},</p>

// PhD
<p>Thank you for checking out MSU's online Doctor of Philosophy in Engineering with a concentration in Chemical Engineering degree.</p>
<p>This degree requires 56 credit hours beyond the Bachelor of Science. Programs of study are personalized to the individual student.</p>

<p>See how you can get started by:</p>
<ul>
	<li>Reviewing the <a href="https://online.msstate.edu/chemeng/phd-program/">program structure</a>.</li>
	<li>Requesting information about your desired area of study</li>
</ul>
// end PhD // MS

<p>Thank you for checking out MSU's online Master of Science in Chemical Engineering degree.</p>
<p>This degree requires 31 credit hours to complete. This program if offered in a thesis and non-thesis format.</p>

<p>See how you can get started by:</p>
<ul>
	<li>Reviewing the <a href="https://online.msstate.edu/chemeng/masters-program/">program structure</a>.</li>
	<li>Requesting information about your desired area of study</li>
</ul>

// end MS

<p>Application deadlines for online students at Mississippi State are as follows:</p>
<p><b>For Domestic Students:</b></p>
<ul>
	<li>Spring Enrollments need applications by <b>October 15th</b></li>
    <li>Summer Enrollments need applications by <b>March 15th</b></li>
    <li>Fall Enrollments need applications by <b>June 15th</b></li>
</ul>

<p><b>For International Students:</b></p>
<ul>
	<li>Spring Enrollments need applications by <b>August 15th</b></li>
	<li>Summer Enrollments need applications by <b>February 15th</b></li>
	<li>Fall Enrollments need applications by <b>April 15th</b></li>
</ul>

<p>Because MSU is accredited by the Southern Association of Colleges and Schools Commission on Colleges (SACSCOC) and the Accreditation Board for Engineering and Technology, Inc.(ABET), your courses will meet the same standards as on-campus courses.  Also, your online degree will not be differentiated from an on-campus degree.</p>
<p>Are you <a href="https://online.msstate.edu/chemeng/admissions-process/">ready to apply</a>? If you have any questions or concerns, please contact us. We are ready to help.</p>
<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.dknox_swann')
@endsection

@section('apply')
	@include('common.apply')
@endsection