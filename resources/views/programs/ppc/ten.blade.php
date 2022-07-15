@extends('layouts.mjml')

@section('content')
<h3>Day 10 - Subject: Start your Public Procurement Certificate application today!</h3>
<p>Dear @@{{First}},</p>

<p>Start your application for the online Public Procurement Certificate today!</p>
<p>Remember, the earlier you submit your application, the better chance you have of getting accepted into the program. We've provided a short <a href="https://www.youtube.com/watch?v=-gzq528lad0">video</a> to help you navigate the application process.</p>
<p>As you fill out your application, remember to select Certificate/ Public Procurement as your program of interest and Online Education as your campus.</p>
<p>Please note that your application will not be considered until all forms have been submitted and your application fee has been paid. </p>
<p>If you have any questions, don't hesitate to ask me. I'm happy to help!</p>
@endsection

@section('signature')
	@include('signatures.dknox')
@endsection

@section('apply')
	@include('common.apply')
@endsection