@extends('layouts.mjml')

@section('content')
<h3>Day 31 - Subject: We're here to serve you!</h3>
@include('common.student_services')
@endsection

@section('signature')
	@include('signatures.ssteward')
@endsection

@section('apply')
	@include('common.apply')
@endsection