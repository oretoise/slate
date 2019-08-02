@extends('layouts.mjml')

@section('content')
<h3>Day 63 - Subject: The Bulldog family wants you!</h3>

<img class="img-center" src="https://goto.msstate.edu/www/images/Distance/programs/msgb/msgb_banner.png" />

<p>Dear @@{{First}},</p>

<p>The sooner you get your application completed, the closer you are to reaching your educational goals.</p>

<p>As the General Biology degree coordinator, I am your point of contact, and I'm here to answer any questions you have about the program.</p>

<p>Are you ready to <a href="https://online.msstate.edu/msgb/admissions-process/">apply</a> today?</p>
<p>If so, let me assist you. I'm here to help you!</p>
<p>Sincerely,</p>
@endsection

@section('signature')
	@include('signatures.jbailey')
@endsection

@section('apply')
	@include('common.apply')
@endsection