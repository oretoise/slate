@extends('layouts.responsive')

@section('content')
<h3>Day 0 - Subject: Thank you for your interest in our online MBA program!</h3>

<p>Dear @{{First}},</p>
<img class="img-right" src="https://goto.msstate.edu/www/images/Distance/bba/Student_Computer_B4W5425.jpg"/>

<p>Thank you for your interest in our distance Master of Business Administration program at Mississippi State University.</p>

<p>The MSU College of Business provides an accredited, flexible, and affordable MBA degree to students around the world.</p>

<p>Our emphasis is on quality students, quality professors and quality education. For this reason,</p>

<ul>
    <li><i>U.S. News and World Report</i> ranks us among the Best Online Business Programs.</li>
    <li><a href="http://geteducated.com/">GetEducated.com</a> designates us as a "Best Buy" AACSB Accredited Online MBA.</li>
    <li><i>Military Times</i> considers us among the "Best for Vets" Colleges.</li>
</ul>

<p>Program Highlights:</p>

<ul>
    <li>All students pay in-state tuition</li>
    <li>30-credit hours to complete</li>
    <li>100% online</li>
</ul>

<p>Because MSU is accredited by the Southern Association of Colleges and Schools Commission on Colleges (SACSCOC) and the Association to Advance Collegiate Schools of Business, your courses will meet the same standards as on-campus courses.  Also, your online degree will not be differentiated from an on-campus degree.</p>

<p>Please view our program fast-facts flyer, detailing program admission requirements, prerequisite information, and program curriculum. I'm happy to answer any questions you may have.</p>

<p>I look forward to working with you!</p>
@endsection

@section('signature')
	@include('signatures.mjimerson')
@endsection

@section('apply')
	@include('common.apply')
@endsection