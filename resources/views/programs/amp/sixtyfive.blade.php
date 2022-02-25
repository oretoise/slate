@extends('layouts.mjml')

@section('content')
<h3>Day 65 - Subject: The Bulldog family wants you!</h3>

<img class="img-center" src="https://goto.msstate.edu/www/images/Distance/programs/geosciences/amp/amp_banner.png" />

<p>Dear @@{{First}},</p>

<p>The sooner you complete your application, the closer you are to reaching your educational goals.</p>
<p>As the Applied Meteorology program coordinator, I am your main point of contact, and I'm here to answer any questions you have about the program.</p>
<p>Are you ready to <a href="https://online.msstate.edu/amp#admissions-process">apply</a> today?  If so, I'm here to help you!</p>
<p>Sincerely,</p>
@endsection

@section('signature')
	@include('signatures.jbailey')
@endsection

@section('apply')
	@include('common.apply')
@endsection