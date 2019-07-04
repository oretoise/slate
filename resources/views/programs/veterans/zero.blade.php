@extends('layouts.responsive')

@section('content')
<h3>Day 0 - Subject: Thank you for checking out the VCP!</h3>
<p>Dear @{{First}},</p>

<p>Thank you for checking out the Veterans’ Certificate Program (VCP) at Mississippi State University (MSU)! The purpose of this online program is to provide the needed knowledge, competencies, and skills for individuals to work with veterans in various venues.</p>
<p><b>Program highlights:</b></p>
<ul>
    <li>Completely online</li>
    <li>15 credit hours (five courses)</li>
    <li>Offered at Graduate and Undergraduate levels</li>
    <li>Start in the spring, summer, or fall semester</li>
    <li>All distance students pay in-state tuition</li>
</ul>

<p>All courses are taught by faculty and staff from MSU.  Because MSU is accredited by the Southern Association of Colleges and Schools Commission on Colleges (SACSCOC), your courses will meet the same standards as on-campus courses, and your certificate will not differentiate between online or on-campus.</p>

<p>To see the types of courses that are affiliated with the program, view the <a href="https://online.msstate.edu/veterans/curriculum">curriculum</a>.</p>
<p>Are you ready to apply?  If you have any questions or concerns, please contact me, and I will be glad to assist you.</p>
<p>With warm regards,</p>
@endsection

@section('signature')
	@include('signatures.vtate')
@endsection

@section('apply')
	@include('common.apply')
@endsection