@extends('layouts.mjml')

@section('content')
<h3>Day 28 - Subject: Need an Endorsement? Want to Teach?</h3>

<p>Dear @@{{First}},</p>

<img class="img-right" src="https://goto.msstate.edu/www/images/Distance/programs/biology/bio_cert_28.jpg" />

<p>Are you a teacher in need of an endorsement or wanting to teach dual credit course?  Do you want to teach at the community college level? If so, the online General Biology Certificate program may help you reach your goals.</p>

<p>Since each state has its own criteria for advancement and certification, please contact your state's Department of Education to see how this program relates to their requirements.</p>

<p>New students typically begin the program in the fall semester. The admission deadline is <b>August 1st</b>.  For information about the application process, please visit our <a href="https://online.msstate.edu/biology/">website</a>.</p>

<p>I hope you have a great day!</p>
@endsection

@section('signature')
	@include('signatures.jbailey')
@endsection

@section('apply')
	@include('common.apply')
@endsection