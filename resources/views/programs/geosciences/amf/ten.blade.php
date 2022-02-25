@extends('layouts.mjml')

@section('content')
<h3>Day 10 - Subject: Apply now!</h3>

<p>Dear @@{{First}},</p>

<p>Start your <a href="https://online.msstate.edu/geosciences/amf#admissions-process">application</a> for the online Aeronautical Meteorology Forecaster certificate program.</p>

<p>The earlier you submit your application, the better chance you have of getting into the classes you need.</p>
<p>Your application must be submitted by <b>August 1st</b> to be considered for fall admission.</p>

<p>Thank you for considering Mississippi State for your online certificate. Please let me know if you have any specific questions.</p>
<p>Hail State!</p>
@endsection

@section('signature')
	@include('signatures.jbailey')
@endsection

@section('apply')
	@include('common.apply')
@endsection