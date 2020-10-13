@extends('layouts.mjml')

@section('content')
<h3>Day 60 - Subject: The Bulldog family wants you!</h3>
<p>Dear @@{{First}},</p>

<p>Thank you again for your interest in the online Applied Behavior Analysis (ABA) program at Mississippi State University (MSU). I just wanted to touch base with you again to see if you had any questions for us.</p>

<p>Are you ready to apply? Start <a href="https://online.msstate.edu/caba/admissions-process/">here</a>.</p>

<p>I hope to hear from you soon!</p>
@endsection

@section('signature')
	@include('signatures.vtate')
@endsection

@section('apply')
	@include('common.apply')
@endsection