@extends('layouts.mjml')

@section('content')
<h3>Day 60 - Subject: The Bulldog family wants you!</h3>
<p>Dear @@{{First}},</p>

<p>Thank you again for your interest in the online Bachelor of Applied Science (BAS) degree program at Mississippi State University (MSU). I just wanted to touch base with you again to see if you had any questions for us.</p>

<img class="img-center" src="https://goto.msstate.edu/www/images/Distance/programs/bas/bas_banner.jpg" />

<p>I hope to hear from you soon!</p>
@endsection

@section('signature')
	@include('signatures.kdunlap')
@endsection

@section('apply')
	@include('common.apply')
@endsection