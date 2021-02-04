@extends('layouts.mjml')

@section('content')
<h3>Day 0 - Subject: Thanks for Your Interest in our Online MSIS program!</h3>
<p>Dear @@{{First}},</p>

<img class="img-right" src="https://goto.msstate.edu/www/images/Distance/programs/msis_1.png" />

<p>Thank you for your interest in our online Master of Science in Information Systems (MSIS) degree program at Mississippi State University.</p>

<p>The MSIS program focuses on developing critical technical skills, strengthening communication skills, broadening the knowledge of business functions and operations, and enhancing students' understanding of the link between organizations and information technology.</p>

<p>The program's innovative combination of coursework, practical exercises and projects, and interactive learning approaches has distinguished it as a leader in the education of tomorrow’s IT professionals.</p>
<p>Program Highlights:</p>
<ul>
    <li>Nationally Ranked by <i>U.S. News & World Report</i><li>
    <li>All students pay in-state tuition</li>
    <li>30-credit hours to complete</li>
    <li>100% online courses</li>
</ul>

<p>Because MSU is accredited by the Southern Association of Colleges and Schools Commission on Colleges (SACSCOC) and the Association to Advance Collegiate Schools of Business, your courses will meet the same standards as on-campus courses.  Also, your online degree will not be differentiated from an on-campus degree.</p>

<p>I will follow up with any questions you had within your information request shortly.  In the meantime, please view our program <a href="https://online.msstate.edu/pdf/slate/MSIS-Flyer-20.pdf">fast-fact flyer</a>, detailing program admission requirements, prerequisite information, and program curriculum.</p>

<p>Let me know if you have any questions. I'm happy to help!</p>

@endsection

@section('signature')
	@include('signatures.sclardy')
@endsection

@section('apply')
	@include('common.apply')
@endsection