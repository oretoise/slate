@extends('layouts.mjml')

@section('content')
<h3>Day 60 - Subject: The Bulldog family wants you!</h3>
<p>Dear @@{{First}},</p>

<p>Thank you again for your interest in the online Ph.D. in Instructional Systems and Workforce Development (ISWD) online degree program at Mississippi State University (MSU). We just wanted to touch base with you again to see if you had any questions for us.</p>
<p>We hope to hear from you soon!</p>
@endsection

@section('signature')
	@include('signatures.sclardy')
@endsection

@section('apply')
	@include('common.apply')
@endsection