@extends('layouts.mjml')

@section('content')
<h3>Day 3 - Subject: Why should you complete a bachelor’s degree?</h3>
<p>Dear @@{{First}},</p>

<p>
	<img class="img-right" src="https://goto.msstate.edu/www/images/Distance/programs/psychology/psychology_2.png" />
	A BS degree in Psychology is a sought-after degree for employers. According to recent market research, over the last three years, the demand for bachelor’s-level Psychology professionals has increased 16% on the national level. In fact, the Bureau for Labor Statistics projects steady employment growth for bachelor’s-level psychology-related occupations, and high demand for social and community service managers to help with an aging population and increased need for professionals working in substance abuse treatment and other health-related services.
</p>

<p>According to a market research brief compiled by the Education Advisory Board, the following information was discovered:</p>

<ul>
	<li>The Bureau of Labor Statistics (BLS) projects occupations that require a bachelor’s degree will grow 12 percent from 2012 to 2022.</li>
	<li>Individuals with a bachelor’s degree experienced 43 percent higher median weekly earnings than those with an associate degree.</li>
</ul>

<p>You can also visit the <a href="https://www.bls.gov/">Bureau of Labor Statistics</a> website to research any other information regarding labor statistics.</p>

<p>We look forward to hearing from you soon!</p>
@endsection

@section('signature')
	@include('signatures.ehawkins')
@endsection

@section('apply')
	@include('common.apply')
@endsection