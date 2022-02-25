@extends('layouts.mjml')

@section('content')
<h3>Day 0 - Subject: Thank you for your interest in our Community College Leadership degree!</h3>
<p>Dear @@{{First}},</p>

<p>Thank you for your interest in the online PhD in Community College Leadership (PHCL) program at Mississippi State University (MSU)!  This doctoral program is designed to prepare professionals for leadership positions in community colleges.</p>

<p><b>Online PHCL program highlights:</b></p>
<ul>
    <li>61 hours are required to complete the program.</li>
    <li>Students can start taking courses in the spring, summer, or fall semesters.</li>
    <li>All distance students pay <b>in-state tuition</b>.</li>
</ul>

<p>All courses are taught by faculty and staff from MSU.  To see the types of courses that are affiliated with the program, please check out the <a href="https://online.msstate.edu/phcl/#courses">Course Descriptions</a>.</p>

<p>Because MSU is accredited by the Southern Association of Colleges and Schools Commission on Colleges (SACSCOC), your courses will meet the same standards as on-campus courses, and your degree will not differentiate between online or on-campus.</p>

<p>Are you ready to <a href="https://online.msstate.edu/phcl#admissions-process">apply</a>?  Do you have any questions? I will be glad to assist you.</p>

<p>Thank you,</p>
@endsection

@section('signature')
	@include('signatures.sclardy')
@endsection

@section('apply')
	@include('common.apply')
@endsection