@extends('layouts.mjml')

@section('content')
<h3>Day 0 - Subject: Thanks for your interest in the Online MS in Instructional Technology!</h3>
<p>Dear @@{{First}},</p>

<p>Thank you for your interest in the online Master of Science in Instructional Technology (MSIT) degree program at Mississippi State University (MSU)!</p>

<p>The MSIT program allows you to explore the latest trends and issues in instructional technology, choose from three cutting-edge concentrations, expand exciting career opportunities, work with award-winning faculty, and develop a professional portfolio.</p>   
<p><b>Online MSIT program highlights:</b></p>

<ul>
    <li><b>This program is 100% online</b></li>
    <li>33 hours are required to complete the program</li>
    <li>Start taking courses in the spring, summer, or fall semester</li>
    <li>Choose from three concentrations:  Instructional Design, Distance Education, or Multimedia</li>
    <li>All online students pay <b>in-state tuition</b></li>
</ul>

<p>To see the types of courses that are affiliated with the program, check out the <a href="https://online.msstate.edu/msit#program-structure">Program Structure</a>.</p>

<p>All courses are taught by faculty and staff from MSU.  Because MSU is accredited by the Southern Association of Colleges and Schools Commission on Colleges (SACSCOC), your classes will meet the same standards as those on campus.  Also, your online degree will not be differentiated from an on-campus degree.</p>

<p>Are you ready to <a href="https://online.msstate.edu/msit#admissions-process">apply</a>?  If you have any questions or concerns, please contact me, and I will be glad to assist you.</p>

<p>Thanks,</p>
@endsection

@section('signature')
	@include('signatures.sclardy')
@endsection

@section('apply')
	@include('common.apply')
@endsection