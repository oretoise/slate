@extends('layouts.responsive')

@section('content')
<h3>Day 55 - Subject: The Bulldog family wants you!</h3>

<p>Dear *|FNAME|*,</p>

<p>As your coordinator, I am here to help answer any questions that you have about the program.</p>

<img class="img-center" src="https://goto.msstate.edu/www/images/Distance/programs/wellness/wellness_banner.png" />

<p>It is not too late to <a href="http://distance.msstate.edu/wellness/admissions">apply</a> for admission.</p>
<p>I look forward to working with you!</p>
<p>Thank you,</p>
@endsection

@section('signature')
	@include('signatures.dknox')
@endsection

@section('apply')
	@include('common.apply')
@endsection