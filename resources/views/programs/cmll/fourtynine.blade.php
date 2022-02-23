@extends('layouts.mjml')

@section('content')
<h3>Day 49 - Subject: Don't Miss the Deadline!</h3>
<a href="https://www.youtube.com/watch?v=d8oHhQHPtbE"><img class="img-right" src="https://goto.msstate.edu/www/images/Distance/Email Template/grad_admissions_video.png" /></a>

<p>Dear @@{{First}},</p>
<p>We don't want you to miss the deadline! Submit your <a href="https://apply.grad.msstate.edu/">application for admission</a> to the online MA in Foreign Languages degree. The earlier you submit your application, the better chance you have of getting into the classes you need.</p>
<p>Please review the <a href="https://online.msstate.edu/cmll/admissions-requirements/">admission requirements</a> before you begin your application.</p>
<p>Your completed application must be submitted by <b>August 1st</b> to be considered for fall admission.</p>
<p>Thank you for considering Mississippi State for your online degree. Please let me know if you have any specific questions. I'm happy to help!</p>
<p>Hail State!</p>
@endsection

@section('signature')
	@include('signatures.jbailey')
@endsection

@section('apply')
	@include('common.apply')
@endsection