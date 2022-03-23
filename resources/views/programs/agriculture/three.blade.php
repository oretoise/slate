@extends('layouts.mjml')

@section('content')
<h3>Day 3 - Subject: Earn your Master of Agriculture degree online!</h3>

<p>Dear @@{{First}},</p>

<img class="img-right" src="https://goto.msstate.edu/www/images/Distance/programs/agriculture/agri_1.png" />

<p>At Mississippi State University, we are excited to offer the Master of Agriculture with a concentration in Animal and Dairy Sciences.  This degree is offered completely online!</p>

<p><b>Program Highlights:</b></p>
<ul>
    <li>Only 30 hours to complete</li>
    <li>Non-thesis program</li>
    <li>All students pay in-state tuition rate</li>
</ul>

<p>Because MSU is accredited by the Southern Association of Colleges and Schools Commission on Colleges (SACSCOC), your courses will meet the same standards as on-campus courses.  Also, your online degree will not be differentiated from an on-campus degree.</p>

<p>If you are interested in a degree that will lead to a broad range of careers in areas including extension work, teaching, or production, then this is the program for you.</p>
<p>Let me know if you have questions.</p>
<p>Thank you,</p>
@endsection

@section('signature')
	@include('signatures.mwolfe')
@endsection

@section('apply')
	@include('common.apply')
@endsection