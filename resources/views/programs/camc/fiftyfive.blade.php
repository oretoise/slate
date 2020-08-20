@extends('layouts.mjml')

@section('content')
<h3>Day 55 - Subject: The Bulldog family wants you!</h3>

<p>Dear @@{{First}},</p>

<p>Thank you again for your interest in the Companion Animal Management Certificate at Mississippi State Online. I just wanted to touch base with you again to see if you had any follow up questions.</p>

<img class="img-center" alt="Companion Animal Management Certificate Website Banner" src="https://goto.msstate.edu/www/images/Distance/programs/animal/animal_banner.jpg" />

<p>You may start the Companion Animal Management Certificate at the beginning of the fall, spring or summer semester.  The sooner you complete your <a href="https://www.msstate.edu/future-students/apply">application</a>, the closer you are to reaching your educational goal!</p>

<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.dknox')
@endsection

@section('apply')
	@include('common.apply')
@endsection