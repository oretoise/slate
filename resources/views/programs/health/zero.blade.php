@extends('layouts.mjml')

@section('content')
<h3>Day 0 - Subject: Thank you for checking out MSU's Online Health Promotion program!</h3>

<p>Dear @@{{First}},</p>

<p>Thank you for your interest in the online <b>Master of Science in Food Science, Nutrition, and Health Promotion with a concentration in Health Promotion</b> at Mississippi State University.</p>

<p>At Mississippi State, we offer this program completely online to help students achieve their goals of earning a degree that focuses on prevention-oriented health care.</p>

<p>If you submitted any questions, I will get back with you shortly. In the meantime, please view our <a href="https://online.msstate.edu/sites/www.online.msstate.edu/files/pdf/Health-Promotion.pdf">program brochure</a> detailing admission requirements, prerequisites, and program curriculum.
Let me know if you have any questions. I'm happy to help!</p>
<p>Thank you,</p>
@endsection

@section('signature')
	@include('signatures.lhudson')
@endsection

@section('apply')
	@include('common.apply')
@endsection