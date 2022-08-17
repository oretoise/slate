@extends('layouts.mjml')

@section('content')
<h3>Day 0 - Subject: Thank you for your interest in Mississippi State Online’s MS Counselor Education program!</h3>
<p>Dear @@{{First}},</p>

<p>Thank you for your interest in the online Master of Science in Counselor Education with a concentration in Rehabilitation Counseling degree program at Mississippi State University (MSU)! The program is designed to equip prospective counselors with the knowledge and skills necessary to deal effectively with a broad spectrum of issues surrounding chronic impairment's medical, psychological, and vocational effects.</p>

<p><b>How does the online MS Counselor Education degree program work?</b></p>
<ul>
	<li>In-state tuition for all students.</li>
	<li>Prepares graduates for certification as a Certified Rehabilitation Counselor in all fifty states and Licensed Professional Counselors (LPC) in the state of Mississippi.</li>
	<li>The Master of Science degree program in Rehabilitation counseling is a planned program consisting of 60 semester hours. </li>
	<li>Provides unique training experiences for students through incorporating university-based and field experience practicum.</li>
	<li>Teaching and research assistantships are available.</li>
</ul>
<p>Please visit our website to see the types of courses affiliated with the program.</p>
<p>Because MSU is accredited by the Southern Association of Colleges and Schools Commission on Colleges (SACSCOC), your classes will meet the same standards as those on campus. Also, your online degree will not be differentiated from an on-campus degree.</p>
<p>Ready to apply? I'll be happy to assist you or answer any questions.</p>


@endsection

@section('signature')
	@include('signatures.arijal')
@endsection

@section('apply')
	@include('common.apply')
@endsection