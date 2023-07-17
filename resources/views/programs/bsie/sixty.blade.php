@extends('layouts.mjml')

@section('content')
<h3>Day 60 - Subject: The Bulldog family wants you!</h3>
<p>Dear @@{{First}},</p>
<p>Thank you again for your interest in the online Bachelor of Science in Industrial Engineering degree program at Mississippi State University (MSU). We just wanted to touch base with you again to see if you had any questions for us.</p>
<p>I hope to hear from you soon!</p>
@endsection

@section('signature')
@include('signatures.arijal_swann')
@endsection

@section('apply')
	@include('common.apply')
@endsection