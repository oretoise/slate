@extends('layouts.mjml')

@section('content')
<h3>Day 7 - Subject: Don’t Miss the Deadline!</h3>

<p>Dear @@{{First}},</p>

<a href="https://youtu.be/-gzq528lad0"><img class="img-right" src="https://goto.msstate.edu/www/images/Distance/Email%20Template/grad_admissions_video.png" /></a>

<p>Start your application for admission to the online General Biology degree now!</p>

<p>The earlier you submit your application, the better chance you have of getting into the classes you need.</p>

<p>Please review the admission requirements before you begin your application.</p>

<p>Your completed application must be submitted by <b>August 1st</b> to be considered for fall admission.</p>

<p>Thank you for considering Mississippi State for your online degree. Please let me know if you have any specific questions. I'm happy to help!</p>
@endsection

@section('signature')
	@include('signatures.jbailey')
@endsection

@section('apply')
	@include('common.apply')
@endsection