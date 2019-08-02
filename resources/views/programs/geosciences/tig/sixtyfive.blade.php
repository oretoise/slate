@extends('layouts.mjml')

@section('content')
<h3>Day 65 - Subject: The Bulldog family wants you!</h3>
<p>Dear @@{{First}},</p>

<p>The sooner you complete your application, the closer you are to reaching your educational goals!</p>
<p>As the Environmental Geosciences program coordinator, I am here to answer any questions you have about the program.</p>

<img class="img-center" src="https://goto.msstate.edu/www/images/Distance/programs/geosciences/tig/tig_banner.png" />

<p>Are you ready to <a href="https://online.msstate.edu/geosciences/tig/admissions-process">apply</a> today?  If so, I'm here to help you!</p>

<p>Sincerely,</p>
@endsection

@section('signature')
	@include('signatures.jbailey')
@endsection

@section('apply')
	@include('common.apply')
@endsection