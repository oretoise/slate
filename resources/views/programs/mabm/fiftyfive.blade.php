@extends('layouts.mjml')

@section('content')
<h3>Day 55 - Subject: The Bulldog family wants you!</h3>

<p>Dear @@{{First}},</p>

<p>As your coordinator, I am here to answer questions you have about the program.</p>
<p>You may start the MABM program at the beginning start of fall, spring, or summer semesters.</p>
<p>The sooner you get your application completed, the closer you are to reaching your educational goals.</p>

<img class="img-center" src="https://goto.msstate.edu/www/images/Distance/programs/mabm/mabm_banner.png" />

<p>It is not too late to <a href="https://online.msstate.edu/mabm#admissions-process">apply</a> for admission.</p>
<p>I look forward to working with you!</p>
<p>Thank you,</p>
@endsection

@section('signature')
	@include('signatures.mwolfe')
@endsection

@section('apply')
	@include('common.apply')
@endsection