@extends('layouts.mjml')

@section('content')
<h3>Day 7 - Subject: Start your application today!</h3>
<p>Dear @@{{First}},</p>

<p>Start your application for the online MATX program today!  Keep in mind the application deadlines listed below, and remember, the earlier you submit your admission or readmission application, the better chance you have of getting into the classes that you need.</p>

<p>Your application must be submitted by the semester deadline in which you plan to enroll:</p>

<p>
    Fall semester: <b>August 1</b><br/>
    Spring semester: <b>December 1</b><br/>
    Summer semester: <b>May 15</b>
</p>

<p>We've provided a short video to help you navigate the application process.
As you fill out your application, remember to select <b>Master of Art in Teaching - Special Education (MATX)</b> as your major and <b>Online Education</b> as your campus.</p>

<p>Please note that your application will not be considered until all forms have been submitted and your application fee has been paid.</p>

<p><b>**We are no longer able to place students in Georgia for an internship. Residents living in the state of Georgia will not be eligible to teach in Georgia.**</b></p>

<p>If you have any questions, don’t hesitate to ask me. I'd be happy to help.</p>
<p>Thanks,</p>
@endsection

@section('signature')
	@include('signatures.sclardy')
@endsection

@section('apply')
	@include('common.apply')
@endsection