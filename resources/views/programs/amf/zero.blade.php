@extends('layouts.mjml')

@section('content')
<h3>Day 0 - Subject: Thank you for checking out MSU's online Aeronautical Meteorology Forecaster program!</h3>

<p>Dear @@{{First}},</p>

<p>Thank you for your interest in the online Aeronautical Meteorology Forecaster (AMF) certificate at Mississippi State University (MSU).  The AMF certificate program provides students with a wide variety of meteorology courses.</p>

<p>This undergraduate program is designed to assist individuals who are seeking to meet the requirements of organizations such as:</p>

<ul>
	<li>American Meteorological Society</li>
	<li>National Weather Service</li>
	<li>United States Government</li>
	<li>World Meteorological Organization</li>
</ul>

<p>The course schedule for the AMF program can be accessed <a href="https://online.msstate.edu/amf#program-structure" alt="Program Structure">here</a>.  Please note that these organizations will require math and science courses in addition to the AMF coursework.</p>
<p>Because MSU is accredited by the Southern Association of Colleges and Schools Commission on Colleges (SACSCOC), your courses will meet the same standards as on-campus courses.  Also, your online degree will not be differentiated from an on-campus degree.</p>

<p>If you have any questions or concerns, please contact me. I will be glad to assist you!</p>
<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.jbailey')
@endsection

@section('apply')
	@include('common.apply')
@endsection