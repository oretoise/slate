@extends('layouts.mjml')

@section('content')
<h3>Day 0 - Subject: Thank you for checking out MSU's online Applied Behavior Analysis Certificate program!</h3>

<p>Dear @@{{First}},</p>

<p>Thank you for checking out the online Applied Behavior Analysis (ABA) certificate program at Mississippi State University (MSU)!  This program is designed for those who have an existing master's degree in psychology or education and are seeking coursework that leads to certification as a <a href="https://www.bacb.com/bcba/">Board Certified Behavior Analyst (BCBA)</a>.</p>

<p>
	<b>How does the distance ABA Certificate program work?</b>
	<ul>
		<li>In-state tuition for all students.</li>
		<li>Completely online.</li>
		<li>21 credit hours (7 courses)</li>
		<li>Offered at Graduate level</li>
	</ul>
</p>

<p>To see the types of courses that are affiliated with the program, check out the <a href="https://online.msstate.edu/caba#program-structure">Program Structure</a> on the <a href="https://online.msstate.edu/caba/">website</a>.</p>
<p>Because MSU is accredited by the Southern Association of Colleges and Schools Commission on Colleges (SACSCOC) and the Association to Advance Collegiate Schools of Business, your classes will meet the same standards as those on campus.  Also, your online degree will not be differentiated from an on-campus degree.</p>
<p>Ready to <a href="https://online.msstate.edu/caba#admissions-process">apply</a>? I'll be happy to assist you or answer any questions.</p>
<p>Hail State!</p>
@endsection

@section('signature')
	@include('signatures.sclardy')
@endsection

@section('apply')
	@include('common.apply')
@endsection