@extends('layouts.mjml')

@section('content')
<h3>Day 0 - Subject: Thank you for checking out MSU's online PhD Instructional Systems and Workforce Development (ISWD) program!</h3>
<p>Dear @@{{First}},</p>

<p>Thank you for checking om the online Doctor of Philosophy (Ph.D.) in Instructional Systems and Workforce Development (ISWD) degree program at Mississippi State University (MSU)! The program is an individualized degree program that builds on your existing work and educational experience.</p>
<p><b>How does the distance PhD ISWD degree program work?</b></p>
<ul>
	<li><b>In-state tuition for all students.</b></li>
	<li>A minimum of 90 graduate credits beyond the bachelor's degree.</li>
	<li>Completely online.</li>
	<li>Start the PhD ISWD program in the fall or spring semester.</li>
	<li>Transfer credit hours from other domestic universities, international universities, or military educational programs.</li>
</ul>

<p>To see the types of courses that are affiliated with the program, check out the <a href="https://www.iswd.msstate.edu/sites/www.iswd.msstate.edu/files/2020-06/Ph.D.PlanningForm-REV-SP-20_2.pdf">course listing PDF</a>.</p>

<p>Because MSU is accredited by the Southern Association of Colleges and Schools Commission on Colleges (SACSCOC) and the Association to Advance Collegiate Schools of Business, your classes will meet the same standards as those on campus.  Also, your online degree will not be differentiated from an on-campus degree.</p>
<p>Ready to apply? I'll be happy to assist you or answer any questions.</p>
@endsection

@section('signature')
	@include('signatures.sclardy')
@endsection

@section('apply')
	@include('common.apply')
@endsection