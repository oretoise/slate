@extends('layouts.mjml')

@section('content')
<h3>Day 7 - Subject: Start your application today!</h3>
<p>Dear @@{{First}},</p>

<p>Start your application for the online Athlete Engineering Certificate.  Here is a short <a href="https://www.youtube.com/watch?v=-gzq528lad0">video</a> to help you navigate the application process.</p>
<p>Remember to choose Athlete Engineering Certificate  as your program of interest and Online Education as your campus when applying for <a href="https://www.online.msstate.edu/bsee#admissions-process">admission or readmission.</a>  </p>
<p>If you have any questions, ask. We are happy to help. </p>
@endsection

@section('signature')
@include('signatures.arijal_swann')
@endsection

@section('apply')
	@include('common.apply')
@endsection