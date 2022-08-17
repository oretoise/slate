@extends('layouts.mjml')

@section('content')
<h3>Day 65 - Subject: There's Still Time to Apply for the MS Rehabilitation Counseling Program</h3>
<p>Dear @@{{First}},</p>

<p>As the MS Rehabilitation Counseling distance coordinator, I am here to help answer any questions that you have about the program. Are you ready to <a href="https://online.msstate.edu/msrc#admissions-process">apply</a> today?</p>
<p>I look forward to working with you!</p>
@endsection

@section('signature')
	@include('signatures.arijal')
@endsection

@section('apply')
	@include('common.apply')
@endsection