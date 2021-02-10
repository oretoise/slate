@extends('layouts.mjml')

@section('content')
<h3>Day 60 - Subject: The Bulldog family wants you!</h3>
<p>Dear @@{{First}},</p>
<p>Thank you again for your interest in the online Bachelor of Arts in Communication with a concentration in Public Relations degree program at Mississippi State University (MSU). We just wanted to touch base with you again to see if you had any questions for us.</p>
<img class="img-center" src="https://goto.msstate.edu/www/images/Distance/programs/comm/comm_3.png"/>
<p>We hope to hear from you soon!</p>
@endsection

@section('signature')
	@include('signatures.kanthony')
@endsection

@section('apply')
	@include('common.apply')
@endsection