@extends('layouts.responsive')

@section('content')
<h3>Day 55 - Subject: The Bulldog Family Wants You!</h3>

<p>Dear @{{First}},</p>

<p>As your coordinator, I am here to answer questions you have about the program.</p>
<p>You may start the Health Promotion program at the beginning of fall, spring, or summer semesters.</p>

<img class="img-center" src="https://goto.msstate.edu/www/images/Distance/programs/fnh/fnh_banner.png" />

<p>It is not too late to <a href="http://online.msstate.edu/health/admissions">apply</a> for admission.  I look forward to working with you!</p>
<p>Thank you,</p>
@endsection

@section('signature')
	@include('signatures.dknox')
@endsection

@section('apply')
	@include('common.apply')
@endsection