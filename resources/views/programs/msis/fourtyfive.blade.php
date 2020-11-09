@extends('layouts.mjml')

@section('content')
<h3>Day 45 - Subject: The Bulldog family wants you!</h3>
<p>Dear @@{{First}},</p>

<p>As your distance coordinator, I am here to assist you with any questions you have regarding the <a href="https://online.msstate.edu/msis/">Online MSIS program</a>.   Remember, the sooner you complete your application, the closer you are to reaching your educational goals.</p>

<img class="img-center" src="https://goto.msstate.edu/www/images/Distance/programs/msis/msis_banner.png" />

<p>Please let me know if there's anything I can do to help.  I look forward to working with you.</p>
<p>Sincerely,</p>
@endsection

@section('signature')
	@include('signatures.vanderson')
@endsection

@section('apply')
	@include('common.apply')
@endsection