@extends('layouts.responsive')

@section('content')
<h3>Day 0 - Subject: Thank you for your interest in our online MBA-PM program!</h3>

<p>Dear @{{First}},</p>
<img class="img-right" src="https://goto.msstate.edu/www/images/Distance/bba/Student_Computer_B4W5425.jpg"/>

<p>Thank you for your interest in our distance Master of Business Administration in Project Management degree program at Mississippi State University.</p>

<p>The project management concentration in the MBA degree program is an interdisciplinary program between the College of Business and the College of Engineering. This program was developed to assist engineering students and others in technical fields to move easily into managerial roles.</p>

<p>Program Highlights:</p>
<ul>
    <li>All students pay in-state tuition</li>
    <li>33-credit hours to complete</li>
    <li>100% online</li>
</ul>

<p>Because MSU is accredited by the Southern Association of Colleges and Schools Commission on Colleges (SACSCOC) and the Association to Advance Collegiate Schools of Business, your courses will meet the same standards as on-campus courses.  Also, your online degree will not be differentiated from an on-campus degree.</p>
<p>Please view our program <a href="http://online.msstate.edu/pdf/recruiter/mbapm.pdf">fast-fact flyer</a>, detailing program admission requirements, prerequisite information, and program curriculum. I'm happy to answer any questions you may have.</p>

<p>I look forward to working with you!</p>
@endsection

@section('signature')
	@include('signatures.mjimerson')
@endsection

@section('apply')
	@include('common.apply')
@endsection