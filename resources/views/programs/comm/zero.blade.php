@extends('layouts.mjml')

@section('content')
<h3>Day 0 - Subject: Thank you for checking out MSU's online degree in Communication with a concentration in Public Relations!</h3>
<img class="img-right" src="https://goto.msstate.edu/www/images/Distance/programs/comm/comm_1.png"/>
<p>Dear @@{{First}},</p>

<p>Thank you for checking out MSU's online Bachelor of Arts (BA) in Communication with a concentration in Public Relations program.</p>
<p>The BA in Communication degree program is designed both for students who want to complete or start their degree completely online.</p>
<p><b>What can you do with a BA in Communication?</b><br/>
A BA in Communication with a concentration in Public Relations online opens doors to many career opportunities, including:</p>

<ul>
	<li>Media Panning</li>
	<li>Crisis and Reputation Management</li>
	<li>Social Media Coordination</li>
	<li>Sports Communication</li>
	<li>Entertainment</li>
	<li>Government Relations</li>
	<li>Leadership</li>
	<li>Plus, as the starting point for obtaining advanced degrees in Communication and other areas</li>
</ul>

<p>Check out how you can get started by:</p>
<ul>
	<li>Reviewing our <a href="https://online.msstate.edu/comm/program-structure/">program curriculum</a> information</li>
	<li>Requesting a free transcript evaluation</li>
</ul>

<p>Students can transfer applicable and approved coursework from accredited community colleges and/or four-year institutions into the Communication degree, too.</p>
<p>Because MSU is accredited by the Southern Association of Colleges and Schools Commission on Colleges (SACSCOC), your courses will meet the same standards as on-campus courses. Also, your online degree will not be differentiated from an on-campus degree.</p>

<p>If you have any questions or concerns, please contact us. We are ready to help.</p>
@endsection

@section('signature')
	@include('signatures.kanthony')
@endsection

@section('apply')
	@include('common.apply')
@endsection