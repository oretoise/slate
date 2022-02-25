@extends('layouts.mjml')

@section('content')
<h3>Day 10 - Subject: Start your application today!</h3>

<p>Dear @@{{First}},</p>

<p>
	<a href="https://youtu.be/-gzq528lad0"><img class="img-right" src="https://goto.msstate.edu/www/images/Distance/Email%20Template/grad_admissions_video.png"/></a>
	Start your application for the online Applied Meteorology program.
</p>

<p>The earlier you submit your application, the better chance you have of getting into the classes you need.</p>
<p>Fall admission is preferred, but we accept applications at any time.</p>
<p>Your completed application must be submitted by <b>August 1st</b> to be considered for fall admission.</p>
<p>Thank you for choosing Mississippi State for your online degree. Let me know if you have any questions. I'm happy to help!</p>
<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.jbailey')
@endsection

@section('apply')
	@include('common.apply')
@endsection