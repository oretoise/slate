@extends('layouts.responsive')

@section('content')
<h3>Day 55 - Subject: The Bulldog family wants you!</h3>

<p>Dear @{{First}},</p>

<p>As your coordinator, I am here to help answer any questions that you have about the program.</p>
<p>You may begin the program at the start of fall or spring semesters.</p>

<img class="img-center" src="https://goto.msstate.edu/www/images/Distance/programs/forestry/forestry_banner.png" />

<p>It is not too late to <a herf="http://distance.msstate.edu/forestry/admissions">apply</a> for admission.</p>
<p>I look forward to working with you!</p>
<p>Thank you,</p>
@endsection

@section('signature')
	@include('signatures.dknox')
@endsection

@section('apply')
	@include('common.apply')
@endsection