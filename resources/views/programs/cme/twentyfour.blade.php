@extends('layouts.mjml')

@section('content')
<h3>Day 24 - Subject: We're here to serve you!</h3>
@include('common.student_services_plural')

<p>Please let us know if you have any questions. We are happy to help.</p>
<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.dknox_swann')
@endsection

@section('apply')
	@include('common.apply')
@endsection