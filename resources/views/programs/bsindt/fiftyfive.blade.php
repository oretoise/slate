@extends('layouts.mjml')

@section('content')
<h3>Day 55 - Subject: The Bulldog family wants you!</h3>
<p>Dear @@{{First}},</p>

<p>Thank you again for your interest in the online INDT program at Mississippi State University. I just wanted to touch base with you again to see if you have any follow up questions.</p>
<p>Remember, you may start the INDT program during the start of fall, spring, or summer semesters.  The sooner you get your application completed, the closer you are to reaching your educational goals.</p>

<img class="img-center" src="https://goto.msstate.edu/www/images/Distance/bsindt/bsindt_3.png" />

<p>Are you ready to <a href="https://online.msstate.edu/bsindt#admissions-process"apply</a> today?</p>
<p>I look forward to hearing from you soon!</p>
<p>Thanks,</p>
@endsection

@section('signature')
	@include('signatures.sclardy')
@endsection

@section('apply')
	@include('common.apply')
@endsection