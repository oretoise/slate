@extends('layouts.responsive')

@section('content')
<h3>Day 55 - Subject: The Bulldog family wants you!</h3>

<p>Dear *|FNAME|*,</p>

<p>As your coordinator, I am here to answer questions you have about the program.</p>
<p>You may start the AGRI program at the beginning start of fall, spring, or summer semesters.</p>
<p>The sooner you get your application completed, the closer you are to reaching your educational goals.</p>

<img class="img-center" src="https://goto.msstate.edu/www/images/Distance/programs/agriculture/AgriWbBnnrN18MR3431.png" />

<p>It is not too late to apply for admissions.</p>
<p>I look forward to working with you!</p>
<p>Thank you,</p>
@endsection

@section('signature')
	@include('signatures.dknox')
@endsection

@section('apply')
	@include('common.apply')
@endsection