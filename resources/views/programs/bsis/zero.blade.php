@extends('layouts.mjml')

@section('content')
<h3>Day 0 - Subject: Thank you for checking out MSU’s online BSIS program!</h3>
<p>Dear @@{{First}},</p>
<p>Thank you for checking out the MSU’s 100% online Bachelor of Science in Interdisciplinary Studies (BSIS) degree program.</p>

<p>
	Our BSIS degree allows students maximum flexibility to customize a curriculum that aligns with their personal and career goals. Students may choose from the following emphasis areas within the BSIS degree:

	<ul>
		<li>Communication</li>
		<li>Criminology</li>
		<li>General Business</li>
		<li>General Technology</li>
		<li>Geosciences</li>
		<li>Health Promotion</li>
		<li>History</li>
		<li>Kinesiology</li>
		<li>Manufacturing Management</li>
		<li>Psychology</li>
		<li>Social Work</li>
		<li>Sociology</li>
		<li>Veterans' Certificate</li>
	</ul>
</p>

<p>
	Check out how you can get started by:
	<ul>
		<li>Reviewing our <a href="https://online.msstate.edu/bsis/program-structure">program curriculum</a> information</li>
		<li>Requesting a free transcript evaluation</li>
	</ul>
</p>

<p>Students can transfer applicable and approved coursework from accredited community colleges and/or four-year institutions into the BSIS degree.</p>
<p>Because MSU is accredited by the Southern Association of Colleges and Schools Commission on Colleges (SACSCOC), your courses will meet the same standards as on-campus courses. Also, your online degree will not be differentiated from an on-campus degree.</p>
<p>Are you <a href="https://online.msstate.edu/bsis/admissions-process">ready to apply</a>? If you have any questions or concerns, please contact us. We are ready to help.</p>
@endsection

@section('signature')
	@include('signatures.ehawkins')
@endsection

@section('apply')
	@include('common.apply')
@endsection