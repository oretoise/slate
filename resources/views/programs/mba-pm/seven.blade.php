@extends('layouts.mjml')

@section('content')
<h3>Day 7 - Subject: Have You Applied for the MBA-PM Program?</h3>

<p>Dear @@{{First}},</p>
<p>Start your application for the online MBA today! Keep in mind the application deadlines and remember, the earlier you submit your application, the better chance you have of getting into the classes you need.</p>

<p>Your application must be submitted by the semester deadline in which you plan to enroll:</p>

<p>
    Fall semester: <b>August 1st</b><br/>
    Spring semester: <b>December 1st</b><br/>
    Summer semester: <b>May 15th</b>
</p>

<p>Remember to choose Master of Business Administration-Project Management as your major and Online Education as your campus when applying for <a href="https://online.msstate.edu/mba-pm#admissions-process"admission</a>.</p>

<p>You can download the <a href="https://online.msstate.edu/files/pdf/MBA-PM-Application-Checklist.pdf">application checklist</a> to ensure that you have submitted the required documents for full admission into the MBA program.</p>

<p>Thank you for choosing Mississippi State for your online degree.</p>
<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.sclardy')
@endsection

@section('apply')
	@include('common.apply')
@endsection