@extends('layouts.mjml')

@section('content')
<h3>Day 0 - Subject: Thank you for checking out MSU's online Master of Science in Computer Science program!</h3>

<img class="img-right" width="350px" src="https://goto.msstate.edu/www/images/Distance/programs/cse/cse_1.png" />

<p>Dear @@{{First}},</p>

<p>Thank you for checking out MSU's online Master of Science in Computer Science degree.</p>
<p>This 31-credit hour degree has both thesis and non-thesis options. Computer Science and Engineering (CSE) is a research-intensive department with faculty who are world class researchers. CSE's research expenditure in 2018 was about $10M, which is one of the highest in the nation. Research opportunities include areas such as:</p>

<ul>
	<li>Artificial Intelligence</li>
	<li>Machine Learning and Soft Computing</li>
	<li>Computer Systems including Security and Networks</li>
	<li>Computational Sciences including High Performance</li>
	<li>Computing and Bioinformatics
	<li>Graphics and Visualization including Visual Data Science and Augmented Reality</li>
	<li>Human Centered Computing including Robotics</li>
	<li>Software Engineering</li>
</ul>

<p>See how you can get started by:</p>
<ul>
	<li>Reviewing the <a href="https://online.msstate.edu/mscse#program-structure">program structure</a>.</li>
	<li>Requesting information about your desired area of study</li>
</ul>

<p>Application deadlines for online students at Mississippi State are as follows:</p>
<p>Fall Admission Deadline:  <b>June 1</b><br/>
Spring Admission Deadline:  <b>November 1</b></p>
<p>Because MSU is accredited by the Southern Association of Colleges and Schools Commission on Colleges (SACSCOC) and the Accreditation Board for Engineering and Technology, Inc.(ABET), your courses will meet the same standards as on-campus courses.  Also, your online degree will not be differentiated from an on-campus degree.</p>
<p>Are you <a href="https://online.msstate.edu/mscse#admissions-process">ready to apply</a>? If you have any questions or concerns, please contact us. We are ready to help.</p>
<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.dknox_swann')
@endsection

@section('apply')
	@include('common.apply')
@endsection