@extends('layouts.mjml')

@section('content')
<h3>Day 14 - Subject: FAQ about the Online General Biology Program</h3>

<p>Dear @@{{First}},</p>

<p>In hopes to help you the best that I can, I wanted to provide you with some answers below to some of the most frequently asked questions, regarding the program.</p>

<ol>
	<li>
		<b>Is this program offered completely online?</b><br/>
		All of the General Biology certificate courses are taught completely online.<br/><br/>
	</li>
	<li>
		<b>How long does it take to complete the program?</b><br/>
		The certificate can be completed in as little as one year by taking two courses per semester.<br/><br/>
	</li>
	<li>
		<b>Are there prerequisites to be considered for admission?</b><br/>
		A minimum of 15 hours in Biology from an accredited university is preferred, with at least a "B" grade and an overall GPA of at least 2.75.<br/><br/>
	</li>
</ol>

<p>For more information about the program, admissions, or student services, visit the <a href="https://online.msstate.edu/biology">General Biology Certificate website</a>.</p>
<p>Let me know if you have any questions. I'm happy to help!</p>

@endsection

@section('signature')
	@include('signatures.jbailey')
@endsection

@section('apply')
	@include('common.apply')
@endsection
