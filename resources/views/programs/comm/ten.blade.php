@extends('layouts.mjml')

@section('content')
<h3>Day 10 - Subject: Start your application today!</h3>
<a href="https://www.youtube.com/watch?v=pGOHF0SnnfE"><img class="img-right" src="https://goto.msstate.edu/www/images/Distance/Email%20Template/undergrad_admissions_video.png"/></a>
<p>Dear @@{{First}},</p>
<p>Start your application for the online Communication degree program.  Here is a short video to help you navigate the application process.</p>
<p>Remember to choose <b><span style="color: #800000;">Communication/Public Relations (BA)</span></b> as your major and <b><span style="color: #800000;">Online Education</span></b> as your campus when applying for <a href="https://online.msstate.edu/comm/admissions-process">admission or readmission</a>.</p>
<p>If you have any questions, ask. We are happy to help.</p>
<p>Thank you for considering Mississippi State for your online degree!</p>
@endsection

@section('signature')
	@include('signatures.kanthony')
@endsection

@section('apply')
	@include('common.apply')
@endsection