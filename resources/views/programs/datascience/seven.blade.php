@extends('layouts.mjml')

@section('content')
<h3>Day 7 - Subject: Start your application today!</h3>
<p>Dear @@{{First}},</p>

<p>Start your application for the online Doctor of Philosophy in Engineering with a concentration in Computer Science program.  Here is a short <a href="https://youtu.be/YQIXYYITnZs">video</a> to help you navigate the application process.</p>


<p>Remember to choose <span style="color: #5D1725;"><b>Data Science Pedagogy Certificate</b></span> as your program of interest and <span style="color: #5D1725;"><b>Online Education</b></span> as your campus when applying for <a href="https://online.msstate.edu/admissions-process/">admission</a> or <a href="https://online.msstate.edu/admissions-process/">readmission</a>.</p>
// end MS

<p>If you have any questions, just ask. I am happy to help. </p>
<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.dknox')
@endsection

@section('apply')
	@include('common.apply')
@endsection