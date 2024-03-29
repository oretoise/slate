@extends('layouts.mjml')

@section('content')
<h3>Day 3 - Subject: Why should you complete a bachelor's degree?</h3>

<img class="img-right" src="https://goto.msstate.edu/www/images/Distance/programs/history/history_2.png" />

<p>Dear @@{{First}},</p>

<p>According to market research compiled by the Education Advisory Board, the following information was discovered:</p>

<ul>
    <li>The Bureau of Labor Statistics (BLS) projects occupations that require a bachelor's degree will grow 12 percent from 2012 to 2022.</li>
    <li>Individuals with a bachelor's degree experienced 43 percent higher median weekly earnings than those with an associate degree.</li>
</ul>

<p>You can also visit the <a href="https://www.bls.gov/">Bureau of Labor Statistics</a> website to research any other information regarding labor statistics.</p>

<p>We look forward to hearing from you soon!</p>
@endsection

@section('signature')
	@include('signatures.jbailey')
@endsection

@section('apply')
	@include('common.apply')
@endsection