@extends('layouts.mjml')

@section('content')
<h3>Day 55 - Subject: The Bulldog family wants you!</h3>

<p>Dear @@{{First}},</p>

<p>Thank you again for your interest in the Clinical Health Promotion and Wellness Coaching Certificate at Mississippi State Online. I just wanted to touch base with you again to see if you had any follow up questions. </p>

<img class="img-center" src="https://goto.msstate.edu/www/images/Distance/programs/wellness/wellness_banner.png" />

<p>You may start the Clinical Health Promotion and Wellness Coaching Certificate at the beginning start of fall or spring semesters. The sooner you get your <a href="https://online.msstate.edu/wellness/admissions-process">application</a> completed, the closer you are to reaching your educational goals.</p>
<p>Thank you,</p>
@endsection

@section('signature')
	@include('signatures.dknox')
@endsection

@section('apply')
	@include('common.apply')
@endsection