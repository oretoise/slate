@extends('layouts.mjml')

@section('content')
<h3>Day 0 - Subject: Thank you for your interest in MSU's online MS Educational Psychology program!</h3>
<p>Dear @@{{First}},</p>

<p>Thank you for your interest in the online Master of Science in Educational Psychology- Applied Behavior Analysis (ABA) degree program at Mississippi State University (MSU)! The program is designed to prepare students to become successful behavior analysts and leaders who provide high quality, evidence-based services to diverse populations, and functioning levels in order to make socially significant changes in the lives of others. The program provides the  necessary coursework, which leads to certification as a <a href="https://www.bacb.com/bcba/" target="_blank">Board Certified Behavior Analyst (BCBA)</a> by offering classes that are approved as a <a href="https://www.abainternational.org/vcs.aspx" target="_blank">Verified Course Sequence</a> by the Association for Behavior Analysis International.</p>

<p>How does the online MS EPY- ABA degree program work?</p>
<ul>
    <li>In-state tuition for all students.</li>
    <li>Completely online; each class meet synchronously once per week in the evenings.</li>
    <li>Application Deadline: Fall semester: March 15</li>
    <li>Our program operates on a cohort model, meaning that all students are admitted together only in the Fall semester and all students take courses in the same pre-determined course sequence. </li>
    <li>Minimum of 40 credit hours are required to complete the program. (10 hours of core Educational Psychology courses + 24 Hours of ABA concentration courses + 6 hours of practicum courses)</li>
    <li>Students are required to take two semesters (6 credit hours) of practicum as part of the degree; practicum courses are offered each semester, but only 6 credit hours are required.</li>
</ul>

<p>To see the types of courses that are affiliated with the program, please visit our <a href="https://online.msstate.edu/msepy#program-structure" target="_blank">website.</a></p>

<p>Because MSU is accredited by the Southern Association of Colleges and Schools Commission on Colleges (SACSCOC), your classes will meet the same standards as those on campus. Also, your online degree will not be differentiated from an on-campus degree.</p>

<p>Ready to apply? I'll be happy to assist you or answer any questions.</p>
<p>Thank you,</p> 
@endsection

@section('signature')
	@include('signatures.arijal')
@endsection

@section('apply')
	@include('common.apply')
@endsection