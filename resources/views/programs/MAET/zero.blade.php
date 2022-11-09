@extends('layouts.mjml')

@section('content')
<h3>Day 0 - Subject: Thank you for checking out MSU’s online Master of Science in Agriculture with a concentration in Engineering Technology program!</h3>
<p>Dear @@{{First}},</p>

<p>Thank you for checking out MSU’s online Master of Science in Agriculture with a concentration in Engineering Technology degree.  </p>
<p> Identify emerging techniques, skills, methods to help solve agricultural engineering problems with a degree from MS State Online. The Master of Science in Agriculture with a concentration in Engineering Technology can open a world of opportunity. The program is designed to prepare individuals for agricultural systems, technology, and business management careers within the agricultural industry and its associated business and industrial sectors. This online program requires a minimum of 30 credit hours of coursework, with at least 15 hours at the 8000-level, and does not require a thesis. Aside from the Concentration required courses, the student’s graduate committee will determine specific course requirements for the student’s program. Work with your advisor to customize your degree path today!</p>
<ul>
	<li>Reviewing the <a href="https://online.msstate.edu/maet">program structure</a></li>
	<li>Requesting information about your desired area of study /li>
</ul>

<p>Application deadlines for online students at Mississippi State are as follows:</p>
<p>
Fall Admission Deadline:  <b>August 1</b><br/>
Spring Admission Deadline:  <b>December 1</b><br/>
Summer Admission Deadline:  <b>May 15</b>
</p>

<p>Because MSU is accredited by the Southern Association of Colleges and Schools Commission on Colleges (SACSCOC), your courses will meet the same standards as on-campus courses.  Also, your online degree will not be differentiated from an on-campus degree.</p>
<p>Are you ready to <a href="https://online.msstate.edu/maet#admissions-process">apply</a>? If you have any questions or concerns, please contact us. We are ready to help.</p>
<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.mwolfe')
@endsection

@section('apply')
	@include('common.apply')
@endsection