@extends('layouts.mjml')

@section('content')
<h3>Day 0 - Subject: Thank you for checking out MSU's online degree in Communication with a concentration in Public Relations / Communication & Media Studies!</h3>
<img class="img-right" src="https://goto.msstate.edu/www/images/Distance/programs/comm/comm_1.png"/>
<p>Dear @@{{First}},</p>

<p>Thank you for checking out MSU's online Bachelor of Arts (BA) in Communication with a concentration in Public Relations program.</p>
<p>The BA in Communication degree program is designed both for students who want to complete or start their degree completely online.</p>
<p><b>What can you do with a BA in Communication?</b><br/>

// PR 
A BA in Communication with a concentration in Public Relations online opens doors to many career opportunities, including:</p>

<ul>
	<li>Media Panning</li>
	<li>Crisis and Reputation Management</li>
	<li>Social Media Coordination</li>
	<li>Sports Communication</li>
	<li>Entertainment</li>
	<li>Government Relations</li>
	<li>Leadership</li>
</ul>

<p>Plus, this degree can serve as the starting point for obtaining advanced degrees in Psychology and other areas.</p>

// End PR

// CMST
A BA in Communication with a concentration in Communication & Media Studies online opens doors to many career opportunities, including:</p>

<ul>
	<li>Community Outreach and Engagement (advocacy work, politics, diplomacy, public affairs, etc.)</li>
	<li>Event Planning and Fundraising</li>
	<li>Human Resources</li>
	<li>Philanthropy</li>
	<li>Publishing</li>
	<li>Sales</li>
	<li>Speech and Technical Writing</li>
</ul>

<p>Plus, many students interested in graduate work, such as advanced study in a communication field, education and student affairs, law school, divinity school, or business school, choose Communication & Media Studies for the preparation they get in the applied research, writing, and speaking skills that are vital for success in graduate study.</p>

// End CMST

<p>Check out how you can get started by:</p>
<ul>
	<li>Reviewing our <a href="https://online.msstate.edu/comm#program-structure">program curriculum</a> information</li>
	<li>Requesting a free transcript evaluation</li>
</ul>

<p>Students can transfer applicable and approved coursework from accredited community colleges and/or four-year institutions into the Communication degree, too.</p>
<p>Because MSU is accredited by the Southern Association of Colleges and Schools Commission on Colleges (SACSCOC), your courses will meet the same standards as on-campus courses. Also, your online degree will not be differentiated from an on-campus degree.</p>

<p>If you have any questions or concerns, please contact us. We are ready to help.</p>
@endsection

@section('signature')
	@include('signatures.mchancellor')
@endsection

@section('apply')
	@include('common.apply')
@endsection