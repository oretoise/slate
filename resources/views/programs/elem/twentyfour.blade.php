@extends('layouts.mjml')

@section('content')
<h3>Day 24 - Subject: We're here to serve you!</h3>
@include('common.student_services')
<p>Please let me know if you have any questions.  I'm ready to help.</p>
<p>Sincerely,</p>
@endsection

@section('signature')
	@include('signatures.sclardy')
@endsection

@section('apply')
	@include('common.apply')
@endsection