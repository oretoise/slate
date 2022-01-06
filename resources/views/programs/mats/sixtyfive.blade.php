@extends('layouts.mjml')

@section('content')
<h3>Day 65 - Subject: The Bulldog family wants you!</h3>
<p>Dear @@{{First}},</p>

<p>I wanted to touch-base with you to see if you had any questions about Master of Arts in Teaching Secondary (MATS) online program.</p>

<p>Remember you can start the teacher education program in the fall or spring semester; however, if you have core classes to take, you can start those in the summer. The sooner you get your application completed, the closer you are to reaching your educational goals.</p>

<img class="img-center" src="https://goto.msstate.edu/www/images/Distance/mats/mats_banner.png" />

<p>I look forward to working with you!</p>
<p>Thank you,</p>
@endsection

@section('signature')
	@include('signatures.sclardy')
@endsection

@section('apply')
	@include('common.apply')
@endsection