@extends('layouts.mjml')

@section('content')
<h3>Day 55 - Subject: The Bulldog family wants you!</h3>
<img class="img-center" src="https://goto.msstate.edu/www/images/Distance/programs/geosciences/amf/amf_banner.png" />

<p>Greetings, @@{{First}},</p>
<p>As the online Aeronautical Meteorology Forecaster certificate program coordinator, I am here to help you with any questions you have about the program.  Are you ready to <a href="https://online.msstate.edu/geosciences/amf/admissions-process/">apply</a> today?  Let me know what I can do to assist you.</p>
<p>Sincerely,</p>
@endsection

@section('signature')
	@include('signatures.jbailey')
@endsection

@section('apply')
	@include('common.apply')
@endsection