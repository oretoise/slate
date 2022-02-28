@extends('layouts.mjml')

@section('content')
<h3>Day 35 - Subject: We're here to serve you!</h3>
@include('common.student_services')
@endsection

@section('signature')
	@include('signatures.mchancellor')
@endsection

@section('apply')
	@include('common.apply')
@endsection