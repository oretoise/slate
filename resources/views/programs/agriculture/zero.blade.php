@extends('layouts.mjml')

@section('content')
<h3>Day 0 - Subject: Thanks for your interest in the AGRI program!</h3>

<p>Dear @@{{First}},</p>

<p>Thank you for your interest in the online Master of Agriculture with a concentration in Animal and Dairy Sciences (AGRI) program at Mississippi State University.</p>

<p>The AGRI program is a multidisciplinary science that focuses on:</p>

<ul>
    <li>livestock and companion animal growth</li>
    <li>health and safety</li>
    <li>food and fiber production</li>
</ul>

<p>This program prepares students for careers in the animal industries by enhancing technical skills, communication skills, and scientific literacy.</p>

<p>I will follow up with any questions you had in your request for information query shortly.  In the meantime, please view our <a href="https://online.msstate.edu/files/pdf/Master-of-Agriculture-ADS.pdf">program brochure</a> detailing admission requirements, prerequisites, and program curriculum.

<p>Let me know if you have any questions. I'm happy to help!</p>

<p>Thank you,</p> 
@endsection

@section('signature')
	@include('signatures.mwolfe')
@endsection

@section('apply')
	@include('common.apply')
@endsection