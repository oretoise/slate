@extends('layouts.responsive')

@section('content')
<h3>Day 35 - Subject: We’re here to serve you!</h3>
@include('common.student_services')
<p>If we can assist you in any way, please contact us.  We are ready to help.</p>
@endsection

@section('signature')
	@include('signatures.ehawkins')
@endsection

@section('apply')
	@include('common.apply')
@endsection