@extends('layouts.mjml')

@section('content')
<h3>Day 49 - Subject: Don't Miss the Deadline!</h3>
<p>Dear @@{{First}},</p>

<a href="https://youtu.be/-gzq528lad0"><img class="img-right" src="https://goto.msstate.edu/www/images/Distance/Email Template/grad_admissions_video.png" /></a>

<p>If you haven't submitted your <a href="https://online.msstate.edu/biology#admissions-process"application</a> for admission to the online General Biology Certificate yet, the earlier you submit your application, the better chance you have of getting into the classes you need.</p>
<p>Your completed application must be submitted by <b>August 1st</b> to be considered for fall admission.</p>
<p>Thank you for considering Mississippi State for your online education. Please let me know if you have any specific questions. I'm happy to help!</p>
@endsection

@section('signature')
	@include('signatures.jbailey')
@endsection

@section('apply')
	@include('common.apply')
@endsection