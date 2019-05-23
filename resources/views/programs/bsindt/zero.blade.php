@extends('layouts.responsive')

@section('content')
<h3>Day 0 - Subject: Thank you for checking out MSU’s online Industrial Tech program!</h3>
<p>Dear *|FNAME|*,</p>
<p>
	<img class="img-right" src="https://goto.msstate.edu/www/images/Distance/bsindt/bsindt_1.png" />
	Thank you for checking out MSU’s online Bachelor of Science in Industrial Technology (INDT) degree.
</p>

<p>This program is designed for you -- the student who is preparing for employment leading to supervisory and management positions in the production, automation, or maintenance areas of industry.</p>

<p>
	<span style="color: #800000;"><b>How does the distance INDT work?</b></span>
</p>

<ul>
	<li><span style="color: #800000;"><b>In-state tuition for all online students.</b></span></li>
	<li>124 hours are required to complete the program.</li>
	<li><span style="color: #800000;"><b>This program is not completely online.</b></span> Some courses require students to participate in on-campus workshops, which will be held on our Starkville, MS, campus during four Saturdays in the semester.</li>
	<li>You can start taking courses in the spring, summer, or fall semester.</li>
	<li>Two concentrations are available: 1) Industrial Automation and 2) Manufacturing & Maintenance Management.</li>
</ul>

<p>Because MSU is accredited by the Southern Association of Colleges and Schools Commission on Colleges (SACSCOC) and the Association to Advance Collegiate Schools of Business, your courses will meet the same standards as on-campus courses.  Also, your online degree will not be differentiated from an on-campus degree.</p>
<p>Are you ready to apply?  If you have any questions or concerns, please contact me, and I will be glad to assist you.</p>
<p>Thanks,</p>
@endsection

@section('signature')
	@include('signatures.vtate')
@endsection

@section('apply')
	@include('common.apply')
@endsection