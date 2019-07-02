@extends('layouts.responsive')

@section('content')
<h3>Day 0 - Subject: Thank you for your interest in Workforce Education Leadership (WEL)!</h3>
<p>Dear @{{First}},</p>

<p>Thank you for your interest in the online Master of Science in Workforce Education Leadership (WEL) degree program at Mississippi State University (MSU)!</p>

<p>This program is designed to prepare professionals for employment in workforce education in post-secondary educational institutions and social services entities.</p>

<p><b>WEL program highlights:</b></p>
<ul>
    <li>This program is 100% online.</li>
    <li>30 hours are required to complete the program.</li>
    <li>You can start courses in the spring, summer, or fall semester.</li>
    <li>All online students pay in-state tuition.</li>
</ul>

<p>All courses are taught by faculty and staff from MSU.  Because MSU is accredited by the Southern Association of Colleges and Schools Commission on Colleges (SACSCOC), your classes will meet the same standards as those on-campus. Also, your online degree will not be differentiated from an on-campus degree.</p>

<p>To see the types of classes that are affiliated with the program, check out the <a href="https://online.msstate.edu/wel/course_descriptions">Course Descriptions</a>.</p>

<p>Are you ready to apply? If you have any questions, I will be happy to help!</p>
<p>Thanks,</p>
@endsection

@section('signature')
	@include('signatures.vtate')
@endsection

@section('apply')
	@include('common.apply')
@endsection