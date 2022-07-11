@extends('layouts.mjml')

@section('content')
<h3>Day 65 - Subject: There's Still Time to Apply for the MS EPY Program</h3>
<p>Dear @@{{First}},</p>

<p>As the MS EPY distance coordinator, I am here to help answer any questions that you have about the program. Are you ready to <a href="https://online.msstate.edu/edld#admissions-process">apply</a> today?</p>

<img class="img-center" src="https://goto.msstate.edu/www/images/Distance/programs/msepy/msepy_banner.png" />

<p>I look forward to working with you!</p>

<p>Thank you,</p>
@endsection

@section('signature')
	@include('signatures.arijal')
@endsection

@section('apply')
	@include('common.apply')
@endsection