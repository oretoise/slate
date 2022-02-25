@extends('layouts.mjml')

@section('content')
<h3>Day 10 - Subject: Start your application today!</h3>

<p>Dear @@{{First}},</p>

<p>
	<a href="https://youtu.be/-gzq528lad0"><img class="img-right" src="https://goto.msstate.edu/www/images/Distance/Email%20Template/grad_admissions_video.png"/></a>
	Start your <a href="https://online.msstate.edu/engs#admissions-process">application for admission</a> today!
</p>

<p>Remember, the earlier you submit your application, the better chance you have of getting into the classes you need.</p>
<p>Your completed application should be submitted by <b>August 1st</b> to be considered for fall admission.</p>
<p>Fall admission is preferred, but spring and summer applicants will be considered.</p> 
<p>Thank you for choosing Mississippi State for your online degree. Let me know if you have any questions. I'm happy to help!</p>
<p>Sincerely,</p>
@endsection

@section('signature')
	@include('signatures.jbailey')
@endsection

@section('apply')
	@include('common.apply')
@endsection