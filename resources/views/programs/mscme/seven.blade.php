@extends('layouts.mjml')

@section('content')
<h3>Day 7 - Subject: Start your application today!</h3>

<a href="https://youtu.be/-gzq528lad0" title="Your Guide to Graduate Admissions"><img class="img-right" src="https://goto.msstate.edu/www/images/Distance/Email%20Template/grad_admissions_video.png" /></a>

<p>Dear @@{{First}},</p>
<p>Start your application for the online Master of Science in Computational Engineering program.  Here is a short video to help you navigate the application process.</p>

<p>Remember to choose <span style="color: #5D1725;"><b>Master of Science</b></span> and <span style="color: #5D1725;"><b>Computational Engineering</b></span> as your Major and <span style="color: #5D1725;"><b>Online Education</b></span> as your campus when applying for <a href="https://online.msstate.edu/cme/admissions-process/">admission</a> or <a href="https://online.msstate.edu/cme/admissions-process/">readmission</a>.</p>

<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.dknox_swann')
@endsection

@section('apply')
	@include('common.apply')
@endsection