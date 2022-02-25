@extends('layouts.mjml')

@section('content')
<h3>Day 55 - Subject: The Bulldog family wants you!</h3>
<p>Dear @@{{First}},</p>

<p>Thank you again for your interest in the Environment and Sustainability Certificate at Mississippi State Online. We just wanted to touch base with you again to see if you had any follow up questions.</p>

<img class="img-center" src="https://goto.msstate.edu/www/images/Distance/programs/ensc/ensc_2.png" />

<p>You may start the Environment and Sustainability Certificate program at the beginning of the fall, spring or summer semester.  The sooner you complete your <a href="https://online.msstate.edu/ensc#admissions-process"application</a>, the closer you are to reaching your educational goal!</p>
<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.dknox')
@endsection

@section('apply')
	@include('common.apply')
@endsection