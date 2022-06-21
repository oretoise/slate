@extends('layouts.mjml')

@section('content')
<h3>Day 3 - Subject: Aeronautical Meteorology Forecaster Certificate at MSU</h3>

<p>Dear @@{{First}},</p>

<img class="img-right" src="https://goto.msstate.edu/www/images/Distance/programs/geosciences/amf/amf_1.png" />

<p>The Aeronautical Meteorology Forecaster (AMF) program leads to a certificate.  In addition, the credits earned can be applied toward a Bachelor of Science in Geosciences with a concentration in Broadcast and Operational Meteorology.</p>
<p>The <a href="https://online.msstate.edu/bomp#program-structure" alt="Bachelor's degree requirements">BS degree</a> can be earned by completing all 11 AMF courses, six (6) additional meteorology courses, and by satisfying all general education requirements (approximately 72 credit hours) to earn the 124 total credit hours needed to earn the degree.</p>

<p>Check out the latest Aeronautical Meteorology Forecaster (AMF) certificate <a href="https://www.online.msstate.edu/sites/www.online.msstate.edu/files/2022-06/AMF_Flyer.pdf">flyer</a>. It provides detailed information about the online program that can assist you in furthering your career.</p>

<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.jbailey')
@endsection

@section('apply')
	@include('common.apply')
@endsection