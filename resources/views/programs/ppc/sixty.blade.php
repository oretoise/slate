@extends('layouts.mjml')

@section('content')
<h3>Day 60 - Subject: There's Still Time to Apply for the Public Procurement Certificate </h3>
<p>Dear @@{{First}},</p>

<p>As the Public Procurement Certificate online coordinator, I am here to help answer any questions that you have about the program. Are you ready to <a href="https://online.msstate.edu/ppc#admissions-process">apply</a> today?</p>

<p>I hope to hear from you soon!</p>
@endsection

@section('signature')
	@include('signatures.lhudson')
@endsection

@section('apply')
	@include('common.apply')
@endsection