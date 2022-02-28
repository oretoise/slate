@extends('layouts.mjml')

@section('content')
<h3>Day 3 - Subject: Why should you complete a bachelor's degree?</h3>
<img class="img-right" src="https://goto.msstate.edu/www/images/Distance/programs/comm/comm_2.png"/>
<p>Dear @@{{First}},</p>

<p>A BA degree in Communication is a sought-after degree for employers. According to recent market research, employment in media and communication occupations is projected to grow 4 percent from 2019 to 2029 and will result in about 46,200 new jobs. Demand for media and communication occupations is expected to arise from the need to create, edit, translate, and disseminate information through a variety of different platforms.</p>

<p>According to a market research brief compiled by the Education Advisory Board, the following information was discovered:</p>
<ul>
	<li>The Bureau of Labor Statistics (BLS) projected occupations that require a bachelor's degree will grow 12 percent from 2012 to 2022.</li>
	<li>Individuals with a bachelor's degree experienced 43 percent higher median weekly earnings than those with an associate degree.</li>
</ul>

<p>You can also visit the <a href="https://www.bls.gov/">Bureau of Labor Statistics</a> to research any other information regarding labor statistics.</p>
<p>Our students have interned with MSU Athletics, Walt Disney World, Coca Cola, the U.S. Congress, local news stations, and community-based organizations.</p>
<p>We look forward to hearing from you soon!</p>
@endsection

@section('signature')
	@include('signatures.mchancellor')
@endsection

@section('apply')
	@include('common.apply')
@endsection