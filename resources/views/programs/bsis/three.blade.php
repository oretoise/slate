@extends('layouts.mjml')

@section('content')
<h3>Day 3 - Subject: Why should you complete a bachelor's degree?</h3>
<p>Dear @@{{First}},</p>

<p>According to the market research brief, <i>Market Viability of an Online Bachelor of Science in Interdisciplinary Studies at Mississippi State University</i>, compiled by the Education Advisory Board, the following information was discovered:

<ul>
	<li>Regional demand for bachelor's-level interdisciplinary studies graduates increased 27 percent from July 2013 to December 2016.</li><br/>
	<li>Employers in the greater Mississippi area posted 44,820 jobs for interdisciplinary studies graduates in the second half of 2016.</li><br/>
	<li>The Bureau of Labor Statistics (BLS) projects occupations that require a bachelor's degree will grow 12 percent from 2012 to 2022.</li><br/>
	<li>Individuals with a bachelor's degree experienced 43 percent higher median weekly earnings than those with an associate degree. </li><br/>
	<li>A bachelor's-level interdisciplinary studies program can provide opportunities for improved employment outcomes for non-traditional graduates.</li>
</ul>

<p>You can also visit the <a href="https://www.bls.gov/">Bureau of Labor Statistics</a> website to research any other information regarding labor statistics.

<p>We look forward to hearing from you soon!</p>
@endsection

@section('signature')
	@include('signatures.ehawkins')
@endsection

@section('apply')
	@include('common.apply')
@endsection