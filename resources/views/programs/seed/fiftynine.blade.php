@extends('layouts.mjml')

@section('content')
<h3>Day 59 - Subject: The Bulldog family wants you!</h3>
<p>Dear @@{{First}},</p>

<p>I wanted to touch base with you to see if you have any questions about online Master of Science Secondary (SEED) program.  If so, please do not hesitate to contact me.</p>

<img class="img-center" src="https://goto.msstate.edu/www/images/Distance/programs/seed/seed_banner.png" />

<p>I look forward to hearing from you soon!</p>
<p>Thank you,</p>
@endsection

@section('signature')
	@include('signatures.arijal')
@endsection

@section('apply')
	@include('common.apply')
@endsection