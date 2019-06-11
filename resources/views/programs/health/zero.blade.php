@extends('layouts.responsive')

@section('content')
<h3>Day 0 - Subject: Thank you for checking out MSU’s Online Health Promotion program!</h3>

<p>Dear *|FNAME|*,</p>

<p>Thank you for your interest in the online <b>Master of Science in Food Science, Nutrition, and Health Promotion with a concentration in Health Promotion</b> at Mississippi State University.</p>

<p>At Mississippi State, we offer this program completely online to help students achieve their goals of earning a degree that focuses on prevention-oriented health care.</p>

<p>I will follow up with any questions you had in your request for information query shortly.  In the meantime, please view our <a href="">(FIX ME)program brochure</a> detailing admission requirements, prerequisites, and program curriculum.
Let me know if you have any questions. I'm happy to help!</p>
<p>Thank you,</p>
@endsection

@section('signature')
	@include('signatures.dknox')
@endsection

@section('apply')
	@include('common.apply')
@endsection