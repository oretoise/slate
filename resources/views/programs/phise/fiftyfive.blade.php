@extends('layouts.mjml')

@section('content')
<h3>Day 55 - Subject: The Bulldog family wants you!</h3>

<p>Dear @@{{First}},</p>

<p>Thank you again for your interest in the Doctor of Philosophy in Industrial & Systems Engineering at Mississippi State Online. We just wanted to touch base with you again to see if you had any follow up questions.</p>

<img class="img-center" alt="Industrial & Systems Engineering Banner Image" src="https://goto.msstate.edu/www/images/Distance/programs/ise/ise_2.jpg" />

<p>You may start the Doctor of Philosophy in Industrial & Systems Engineering program at the beginning of the fall, spring or summer semester.  The sooner you complete your <a href="https://apply.grad.msstate.edu/">application</a>, the closer you are to reaching your educational goal!</p>

<p>All the best,</p>
@endsection

@section('signature')
@include('signatures.arijal_swann')
@endsection

@section('apply')
	@include('common.apply')
@endsection