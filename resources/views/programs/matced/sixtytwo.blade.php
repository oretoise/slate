@extends('layouts.mjml')

@section('content')
<h3>Day 62 - Subject: The Bulldog Family wants you!</h3>
<p>Dear @@{{First}},</p>

<p>I wanted to touch-base with you to see if you had any questions about the Master of Arts in Teaching in Community College Education (MATCED) online program.</p>

<img class="img-center" src="https://goto.msstate.edu/www/images/Distance/matced/matced_banner.png" />

<p>I am here to help you with any questions that you have about the program.  I look forward to working with you!</p>
<p>Thank you,</p>
@endsection

@section('signature')
	@include('signatures.arijal')
@endsection

@section('apply')
	@include('common.apply')
@endsection