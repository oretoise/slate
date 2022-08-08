@extends('layouts.mjml')

@section('content')
<h3>Day 0 - Subject: Thank you for checking out MSU’s online Athlete Engineering Certificate program!</h3>
<p>Dear @@{{First}},</p>
<p>Thank you for checking out MSU’s online Athlete Engineering Certificate degree.  The Athlete Engineering Certificate comprises 12 credit hours in different human performance, processes, and analysis fields, all originating out of Industrial & Systems Engineering but in classes that partner with other engineering disciplines and Kinesiology and Human Science experts and faculty.</p>
<p>Students will be required to complete 12 credit hours for this certificate.  As students complete the certificate program, they are encouraged to explore our admission options for a master’s degree program in <a href="http://www.online.msstate.edu/academic-programs">Engineering</a> or <a href="http://www.online.msstate.edu/academic-programs">Industrial</a> engineering. </p>
<p>Other degree options may also be appropriate depending on your interest. For a complete list of our online graduate programming, please visit <a href="http://www.online.msstate.edu/academic-programs">www.online.msstate.edu/academic-programs</a>. Depending on degree requirements, courses completed as part of the certificate may apply to the degree.</p>
<p>Check out how you can get started by:</p>
<ul>
	<li>Reviewing our <a href="https://www.online.msstate.edu/athlete#program-structure">program curriculum information</a></li>
	<li>Requesting information about your desired area of study </li>
</ul>
<p>Application deadlines for online students at Mississippi State are as follows:</p>
<ul>
	<li>Fall Admission Deadline:  <b>June 1</b></li>
	<li>Spring Admission Deadline:  <b>November 1</b></li>
	<li>Summer Admission Deadline:  <b>May 1</b></li>
</ul>
<p>Because MSU is accredited by the Southern Association of Colleges and Schools Commission on Colleges (SACSCOC), your courses will meet the same standards as on-campus courses. Also, your online degree will not be differentiated from an on-campus degree.</p>
<p>Are you <a href="https://www.online.msstate.edu/bsee#admissions-process">ready to apply</a>? If you have any questions or concerns, please contact us. We are ready to help.</p>
@endsection

@section('signature')
	@include('signatures.dknox')
@endsection

@section('apply')
	@include('common.apply')
@endsection