@extends('layouts.mjml')

@section('content')
<h3>Day 10 - Subject: Start your MS EPY application today!</h3>
<p>Dear @@{{First}},</p>

<p>Start your application for the online Master of Science in Educational Psychology- Applied Behavior Analysis today!</p>

<p>Remember, the earlier you submit your application, the better chance you have of getting accepted into the program. We've provided a short <a href="https://www.youtube.com/watch?v=-gzq528lad0">video</a> to help you navigate the application process.</p>

<p>Your application must be submitted by March 15 for Fall admission.</p>

<p>As you fill out your application, remember to select Master of Science in Educational Psychology- Applied Behavior Analysis as your major and Online Education as your campus.</p>

<p>Please note that your application will not be considered until all forms have been submitted and your application fee has been paid. </p>

<p>If you have any questions, don't hesitate to ask me. I'm happy to help!</p>

<p>Thank you,</p>
@endsection

@section('signature')
	@include('signatures.arijal')
@endsection

@section('apply')
	@include('common.apply')
@endsection