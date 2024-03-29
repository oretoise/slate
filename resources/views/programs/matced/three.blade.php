@extends('layouts.mjml')

@section('content')
<h3>Day 3 - Subject: Check out the MATCED courses!</h3>
<p>Dear @@{{First}},</p>

<p>The MATCED is a 30 credit-hour degree program.  You can visit the <a href="https://online.msstate.edu/matced#courses">Course Descriptions</a> for an overview of these hours.</p>

<p>The degree prepares you to teach in a community college and requires a minimum of 18 hours in your teaching field of interest (e.g. history, math, biology).  Please note that your interest area may not be available online and may only be offered on campus (Starkville or Meridian).</p>

<p>It is important to know that all courses are taught online by faculty and staff from Mississippi State University.  Because MSU is accredited by the Southern Association of Colleges and Schools Commission on Colleges (SACSCOC), your online classes will meet the same standards as those on-campus, and your degree will not be differentiated from an on-campus degree.</p>

<p>Ready to <a href="https://online.msstate.edu/matced#admissions-process">apply</a>? I'll be happy to assist you!</p>
<p>Thank you,</p>
@endsection

@section('signature')
	@include('signatures.arijal')
@endsection

@section('apply')
	@include('common.apply')
@endsection