@extends('layouts.mjml')

@section('content')
<h3>Day 0 - Subject: Thank you for checking out MSU's online Industrial & Systems Engineering program!</h3>

<p>Dear @@{{First}},</p>

<img class="right" src="https://goto.msstate.edu/www/images/Distance/programs/ise/ise_1.jpg" />

{% if @@{{program}} == 'PhD Industrial & Systems Engineering' %}
<p>Thank you for checking out MSU's online Doctor of Philosophy in Industrial & Systems Engineering degree.</p>
<p>This 68-hour degree program offers 48 hours of coursework with an additional 20 hours of research.  This program requires a preliminary exam, a dissertation, and an oral exam in defense of the dissertation.</p>
{% endif %}

{% if @@{{program}} == 'MS in Industrial & Systems Engineering' %}
<p>Thank you for checking out MSU’s online Master of Science in Industrial Engineering degree.</p>
<p>This 30-hour degree program has both thesis and non-thesis options.  Students can choose from five concentration track options with their program of study.  These concentrations are:</p>
<ul>
	<li>Human Factors and Ergonomics</li>
	<li>Industrial Systems</li>
	<li>Management Systems Engineering</li>
	<li>Manufacturing Systems</li>
	<li>Operations Research</li>
</ul>{% endif %}

<p>See how you can get started by:</p>
<ul>
	<li>Checking out our <a href="https://www.ise.msstate.edu/academics/graduate/">ISE Graduate Program Overview</a>.</li>
	<li>Finding more information with our <a href="https://www.ise.msstate.edu/wp-content/uploads/ISE-Graduate-Program-Guide.pdf">ISE Graduate Program Guide</a>.</li>
</ul>

<p>Application deadlines for online students at Mississippi State are as follows:</p>
<p>Fall Admission Deadline:  <b>August 1</b><br/>
Spring Admission Deadline:  <b>December 1</b><br/>
Summer Admission Deadline:  <b>May 15</b></p>

<p>Because MSU is accredited by the Southern Association of Colleges and Schools Commission on Colleges (SACSCOC) and the Accreditation Board for Engineering and Technology, Inc.(ABET), your courses will meet the same standards as on-campus courses.  Also, your online degree will not be differentiated from an on-campus degree.</p>

<p>Are you <a href="https://online.msstate.edu/ise/admissions-process/">ready to apply</a>? If you have any questions or concerns, please contact us. We are ready to help.</p>

<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.dknox_swann')
@endsection

@section('apply')
	@include('common.apply')
@endsection
