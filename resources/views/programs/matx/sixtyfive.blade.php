@extends('layouts.mjml')

@section('content')
<h3>Day 65 - Subject: The Bulldog family wants you!</h3>
<p>Dear @@{{First}},</p>

<p>I wanted to touch base with you to see if you had any questions about the online Master of Arts in Teaching - Special Education (MATX) program.</p>

<p>I wanted to remind you that you can start the MATX program in the fall, spring, or summer semester. The sooner you get your application completed, the closer you are to reaching your educational goals.</p>

<img class="img-center" src="https://goto.msstate.edu/www/images/Distance/programs/matx/matx_banner.png" />

<p>I am here to help you in each step of the application process and to answer any questions you have.</p>

<p>Are you ready to <a href="https://online.msstate.edu/matx#admissions-process">apply</a> today?</p>
<p>I look forward to hearing from you soon!</p>
<p>Thank you,</p>
@endsection

@section('signature')
	@include('signatures.arijal')
@endsection

@section('apply')
	@include('common.apply')
@endsection