@extends('layouts.mjml')

@section('content')
@extends('layouts.mjml')

@section('content')
<h3>Day 7 - Subject: Start your application today!</h3>

<a href="https://youtu.be/YQIXYYITnZs" title="Your Guide to Graduate Admissions"><img class="img-right" src="https://goto.msstate.edu/www/images/Distance/Email%20Template/grad_admissions_video.png" /></a>

<p>Dear @@{{First}},</p>

// PhD
<p>Start your application for the online Doctor of Philosophy in Engineering with a concentration in Aerospace Engineering program.  Here is a short video to help you navigate the application process.</p>
<p>Remember to choose <span style="color: #5D1725;"><b>Doctor of Philosophy in Engineering</b></span> and <span style="color: #5D1725;"><b>Aerospace Engineering</b></span> as your Major and <span style="color: #5D1725;"><b>Online Education</b></span> as your campus when applying for <a href="https://online.msstate.edu/cse/admissions-process/">admission</a> or <a href="https://online.msstate.edu/cse/admissions-process/">readmission</a>.</p>
// end PhD // MS
<p>Start your application for the online Master of Science in Aerospace Engineering program.  Here is a short video to help you navigate the application process.</p>

<p>Remember to choose <span style="color: #5D1725;"><b>Master of Science</b></span> and <span style="color: #5D1725;"><b>Aerospace Engineering</b></span> as your Major and <span style="color: #5D1725;"><b>Online Education</b></span> as your campus when applying for <a href="https://online.msstate.edu/cse/admissions-process/">admission</a> or <a href="https://online.msstate.edu/cse/admissions-process/">readmission</a>.</p>
// end MS

<p>If you have any questions, just ask. We are happy to help.</p>
<p>Thank you for considering Mississippi State for your online degree.</p>
<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.mwolfe_swann')
@endsection

@section('apply')
	@include('common.apply')
@endsection
@endsection

@section('signature')
	@include('signatures.mwolfe_swann')
@endsection

@section('apply')
	@include('common.apply')
@endsection