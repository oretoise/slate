@extends('layouts.mjml')

@section('content')
<h3>Day 10 - Subject: Apply Now!</h3>

<p>Dear @@{{First}},</p>

<img class="img-right" src="https://goto.msstate.edu/www/images/Distance/programs/mabm/mabm_2.png" />

<p>The earlier you submit your application, the better chance you have of getting into the classes you need.</p>

<p>Your application must be submitted by the semester deadline in which you plan to enroll:</p>

<p>
    Fall semester: <b>August 1st</b><br/>
    Spring semester: <b>December 1st</b><br/>
    Summer semester: <b>May 15th</b>
</p>

<p>For full admission to this program, students must complete the process for <a href="https://online.msstate.edu/mabm#admissions-process">Classified Admission</a> online.</p>
<p>Thank you for considering Mississippi State for your online degree. Please let me know if you have any specific questions.</p>
@endsection

@section('signature')
	@include('signatures.mwolfe')
@endsection

@section('apply')
	@include('common.apply')
@endsection