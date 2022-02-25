@extends('layouts.mjml')

@section('content')
<h3>Day 0 - Subject: Master of Science in Secondary Education (SEED) Info Request</h3>
<p>Dear @@{{First}},</p>

<p>Thank you for your interest in the online Master of Science in Secondary Education (SEED) degree program at Mississippi State University (MSU)!</p>

<p>The SEED program is designed to provide new and veteran classroom teachers with the opportunity to expand their knowledge and vision of education in terms of theory, research, and practice.</p>

<p>The 33-hour degree can be completed almost entirely online. Visit our website to see the types of <a href="https://online.msstate.edu/seed#courses">courses</a> that are affiliated with the online program.</p>

<p>You may also review the <a href="https://online.msstate.edu/seed#admissions-process">admissions</a> process to determine what materials you need to apply for the SEED program.</p>

<p>Are you ready to apply? I'll be happy to assist you or answer any questions.</p>
<p>Thank you,</p>
@endsection

@section('signature')
	@include('signatures.sclardy')
@endsection

@section('apply')
	@include('common.apply')
@endsection