@extends('layouts.responsive')

@section('content')
<h3>Day 65 - Subject: There's Still Time to Apply for the EDLD-EDLS Program</h3>
<p>Dear @{{First}},</p>
<p>As the EDLD-EDLS distance coordinator, I am here to help answer any questions that you have about the program.  Are you ready to <a href="http://online.msstate.edu/edld/admissions">apply</a> today?</p>

<img class="img-center" src="https://goto.msstate.edu/www/images/Distance/edld/edld_banner.png" />

<p>I look forward to working with you!</p>
<p>Thank you,</p>
@endsection

@section('signature')
	@include('signatures.vtate')
@endsection

@section('apply')
	@include('common.apply')
@endsection