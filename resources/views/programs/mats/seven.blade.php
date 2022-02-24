@extends('layouts.mjml')

@section('content')
<h3>Day 7 - Subject: Start you MATS application today!</h3>
<p>Dear @@{{First}},</p>

<a href="https://youtu.be/-gzq528lad0"><img class="img-right" src="https://goto.msstate.edu/www/images/Distance/Email%20Template/grad_admissions_video.png" /></a>

<p>Start your application for the online Master of Arts in Teaching – Secondary Teacher Alternative Route (MATS) today!</p>

<p>Remember, the earlier you submit your application, the better chance you have of getting into the classes you need.   We've provided a short video to help you navigate the application process.</p>

<p>Your application must be submitted by the semester deadline in which you plan to enroll.</p>

<p>
    Fall semester: <b>August 1</b><br/>
    Spring semester: <b>December 1</b><br/>
    Summer semester: <b>May 15</b>
</p>

<p>As you fill out your application, remember to select Master of Art in Teaching Secondary Education (MATS) as your major and Online Education as your campus.</p>

<p>Please note that your application will not be considered until all forms have been submitted and your application fee has been paid. For additional MATS admission requirements, please see the <a href="https://online.msstate.edu/files/pdf/MATS-Admissions-Checklist.pdf">Admission Checklist</a>.</p>

<p>If you have any questions, don't hesitate to ask me. I'm happy to help!</p>
<p>Thank you,</p>
@endsection

@section('signature')
	@include('signatures.sclardy')
@endsection

@section('apply')
	@include('common.apply')
@endsection