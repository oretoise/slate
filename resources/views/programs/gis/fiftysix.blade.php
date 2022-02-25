@extends('layouts.mjml')

@section('content')
<h3>Day 56 - Subject: There's Still Time to Apply!</h3>
<img class="img-center" src="https://goto.msstate.edu/www/images/Distance/programs/gis/gis_2.png" />

<p>Dear @@{{First}},</p>
<p>If you haven't applied, the sooner you get your application completed, the closer you are to reaching your educational goals. As the online Geospatial and Remote Sensing Technologies certificate program coordinator, I am here to help you with any questions you have about the program.</p>
<p>Are you <a href="https://online.msstate.edu/gis/admissions-process">ready to apply</a> today?  Let me know what I can do to assist you.</p>
<p>Sincerely,</p>
@endsection

@section('signature')
	@include('signatures.jbailey')
@endsection

@section('apply')
	@include('common.apply')
@endsection