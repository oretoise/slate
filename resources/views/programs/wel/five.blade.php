@extends('layouts.mjml')

@section('content')
<h3>Day 5 - Subject: Career Paths with the WEL Degree</h3>
<p>Dear @@{{First}},</p>

<img class="img-right" src="https://goto.msstate.edu/www/images/Distance/programs/wel/wel_1.png" />

<p>Would you like to broaden your knowledge base on workforce preparation, workforce development education, and professional development in postsecondary educational institutions and social services entities? With the WEL degree, you will be able to do just that.</p>

<p>Career Opportunities include positions as:</p>
<ul>
    <li>Workforce Coordinator</li>
    <li>Academic and Career Coach</li>
    <li>Workforce Development Specialist</li>
    <li>Career Advisor and Outreach Specialist</li>
    <li>Office Associates</li>
</ul>

<p>Many of our graduates have started their careers within the community colleges, vocational centers, universities, and more.</p>
<p>Ready to apply? I'll be happy to assist you or answer any questions.</p>
<p>Thank you,</p>
@endsection

@section('signature')
	@include('signatures.vtate')
@endsection

@section('apply')
	@include('common.apply')
@endsection