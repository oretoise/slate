@extends('layouts.mjml')

@section('content')
<h3>Day 0 - Subject: Thank you for checking out MS State's online Electrical Engineering program!</h3>
<p>Dear @@{{First}},</p>
<p>Thank you for checking out MS State's online Bachelor of Science (BS) in Electrical Engineering degree program. </p>
<p>The BS in Electrical Engineering degree program is designed both for students who want to complete or start their degree completely online. </p>
<p>Electrical Engineering is the most diverse branch of engineering concerned with the design, development, and practical application of electrical devices and systems, and with the use of electrical energy. From cyber security, smart-phones, and robotics to satellite communications, renewable energy, and smart grid technologies, electrical engineers have found a way to create innovative connections and integrate these technologies into today’s lifestyle. The challenge of the future is limitless.</p>
<p>Check out how you can get started by:</p>
<ul>
	<li>Reviewing our <a href="https://www.online.msstate.edu/bsee#program-structure">program curriculum information</a></li>
	<li>Requesting a free transcript evaluation</li>
</ul>
<p>Students can transfer applicable and approved coursework from accredited community colleges and/or four-year institutions into the Electrical Engineering degree too.</p>
<p>Because MSU is accredited by the Southern Association of Colleges and Schools Commission on Colleges (SACSCOC), your courses will meet the same standards as on-campus courses. Also, your online degree will not be differentiated from an on-campus degree.</p>
<p>Are you <a href="https://www.online.msstate.edu/bsee#admissions-process">ready to apply</a>? If you have any questions or concerns, please contact us. We are ready to help.</p>
@endsection

@section('signature')
	@include('signatures.mwolfe_swann')
@endsection

@section('apply')
	@include('common.apply')
@endsection