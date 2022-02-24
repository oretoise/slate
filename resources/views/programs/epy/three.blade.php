@extends('layouts.mjml')

@section('content')
<h3>Day 3 - Subject: Why should you complete a bachelor's degree?</h3>
<p>Dear @@{{First}},</p>
<p>The BS in Educational Psychology degree program is a non-teaching major that does not lead to teaching certification (though it is possible to earn alternate route certification upon graduation).</p>
<p><b>What can you do with a BS in Educational Psychology?</b></p>
<p>The BS EPY degree curriculum prepares individuals to work in many helping professions, including:</p>
<ul>
	<li>Clinical mental health counseling</li>
	<li>School counseling</li>
	<li>School psychology</li>
	<li>Speech language pathology</li>
	<li>Plus, as the starting point for obtaining advanced degrees in Psychology and other areas</li>
</ul>
<p>Ready to apply? I'm happy to assist you or answer any questions.</p>
@endsection

@section('signature')
	@include('signatures.sclardy')
@endsection

@section('apply')
	@include('common.apply')
@endsection