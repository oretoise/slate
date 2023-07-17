@extends('layouts.mjml')

@section('content')
<h3>Day 55 - Subject: The Bulldog family wants you!</h3>

<p>Dear @@{{First}},</p>

<p>Thank you again for your interest in the Athlete Engineering Certificate at Mississippi State Online. I just wanted to touch base with you again to see if you had any follow up questions. </p>

<p>You may start the Athlete Engineering Certificate program at the beginning of the fall, spring or summer semester.  The sooner you complete your <a href="https://apply.grad.msstate.edu/">application</a>, the closer you are to reaching your educational goal! </p>
@endsection

@section('signature')
	@include('signatures.arijal_swann')
@endsection

@section('apply')
	@include('common.apply')
@endsection