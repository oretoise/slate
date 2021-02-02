@extends('layouts.mjml')

@section('content')
<h3>Day 0 - Subject: Thank you for your interest in MSU Online!</h3>
<p>Dear @@{{First}},</p>

<p>Thank you for your interest in Mississippi State University Online!  We offer 10 PhD programs, 29 master’s degrees, nine bachelor’s degrees, and nine certificate programs online.  You can review all of the online programs offered on our <a href="https://online.msstate.edu/academic-programs/">Academic Programs page</a>.</p>
<p>Regardless of where you reside, all students pay in-state tuition rates.</p>
<p>MSU is regionally accredited by the Southern Association of Colleges and Schools (SACS). Your transcripts from MSU will not distinguish between a class taught on campus and one offered through MSU online.</p>
<p>I hope you will find that one of our programs meets your needs and will begin the <a href="https://online.msstate.edu/admissions-process/">process for admissions</a>.</p>
<p>The suggested deadlines for admission are as follows:</p>
<ul>
	<li>Fall - <b>August 1</b></li>
	<li>Spring - <b>December 1</b></li>
	<li>Summer - <b>May 15</b></li>
</ul>
<p>If you have any questions or concerns, please contact me at joy.bailey@msstate.edu, and I will be glad to assist you!</p>
<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.jbailey')
@endsection

@section('apply')
	@include('common.apply_snd')
@endsection