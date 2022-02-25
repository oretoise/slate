@extends('layouts.mjml')

@section('content')
<h3>Day 63 - Subject: Apply Today!</h3>

<img class="img-center" src="https://goto.msstate.edu/www/images/Distance/programs/biology/bio_cert_63.png" />

<p>Dear @@{{First}},</p>
<p>If you haven't applied yet, the sooner you get your application completed, the closer you are to reaching your educational goals. As the General Biology Certificate coordinator, I am your point of contact, and I'm here to answer any questions you have about the program.</p>
<p>Are you ready to <a href="https://online.msstate.edu/biology#admissions-process"apply</a> today?</p>
<p>If so, let me assist you. I'm here to help you!</p>

@endsection

@section('signature')
	@include('signatures.jbailey')
@endsection

@section('apply')
	@include('common.apply')
@endsection