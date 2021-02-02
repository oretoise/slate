@extends('layouts.mjml')

@section('content')
<h3>Day 35 - Subject: @@{{First}}, don't miss the deadline!</h3>
<p>Hey @@{{First}},</p>

<p>Have you submitted your <a href=" https://online.msstate.edu/admissions-process/">application for admission</a> to an online program yet? The earlier you submit your application, the better chance you have of getting into the classes you need.</p>
<p>Your application should be submitted by the following deadlines to ensure you are admitted in time to begin classes:</p>
<ul>
	<li>Fall - <b>August 1</b></li>
	<li>Spring - <b>December 1</b></li>
	<li>Summer - <b>May 15</b></li>
</ul>
<p>Thank you for considering Mississippi State for your online degree. We would love for you to join the Bulldog Family. Please let me know if you have any specific questions.</p>
<p>I'm happy to help!</p>
@endsection

@section('signature')
	@include('signatures.jbailey')
@endsection

@section('apply')
	@include('common.apply_snd')
@endsection