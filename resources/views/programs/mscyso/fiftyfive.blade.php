@extends('layouts.mjml')

@section('content')
<h3>Day 55 - Subject: The Bulldog family wants you!</h3>

<p>Dear @@{{First}},</p>

<p>Thank you again for your interest in the Master of Science in Cyber Security and Operations at Mississippi State Online. We just wanted to touch base with you again to see if you had any follow up questions.</p>

<img class="img-center" src="https://goto.msstate.edu/www/images/Distance/programs/cyber/cyber2.png" />

<p>You may start the Master of Science in Cyber Security and Operations program at the beginning of the fall, spring or summer semester.  The sooner you complete your <a href="https://apply.grad.msstate.edu/">application</a>, the closer you are to reaching your educational goal!</p>

<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.mwolfe_swann')
@endsection

@section('apply')
	@include('common.apply')
@endsection