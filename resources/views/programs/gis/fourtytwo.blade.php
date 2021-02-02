@extends('layouts.mjml')

@section('content')
<h3>Day 42 - Subject: Don't Miss the Deadline!</h3>
<p>Dear @@{{First}},</p>

<p>Have you submitted your <a href="https://online.msstate.edu/gis/admissions-process/">application for admission</a> to the online Geospatial and Remote Sensing Technologies certificate program yet? The earlier you submit your application, the better chance you have of getting into the classes you need.</p>
<p>Your application must be submitted by August 1st to be considered for fall admission.</p>
<p>Thank you for considering Mississippi State for your online education. Please let me know if you have any specific questions.</p>
<p>Hail State!</p>
@endsection

@section('signature')
	@include('signatures.jbailey')
@endsection

@section('apply')
	@include('common.apply')
@endsection