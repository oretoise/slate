@extends('layouts.responsive')

@section('content')
<h3>Day 0 - Subject: Thanks for your interest in the Wellness Coaching Certificate!</h3>

<p>Dear @{{First}},</p>

<p>Thank you for your interest in our online Clinical Health Promotion and Wellness Coaching graduate certificate at Mississippi State University.</p>

<p>
    <b><u>Program Highlights:</u></b>
    <ul>
        <li>21 hours are required to complete the certificate program.</li>
        <li>All coursework (12 hours) must be completed before completing the practicum and internship.</li>
        <li><b>This program is not completely online.</b>  Students must complete an on-campus practicum at our Starkville, MS, campus during the Spring semester.</li>
        <li>Students are also required to complete an internship with a specified health care facility within the state of Mississippi during the summer semester.</li>
        <li><b>This program is currently only available to students residing within the state of Mississippi.</b></li>
    </ul>
</p>

<p>Because MSU is accredited by the Southern Association of Colleges and Schools Commission on Colleges (SACSCOC), your courses will meet the same standards as on-campus courses.  Also, your online degree will not be differentiated from an on-campus degree.</p>

<p>Thank you,</p>
@endsection

@section('signature')
	@include('signatures.dknox')
@endsection

@section('apply')
	@include('common.apply')
@endsection