@extends('layouts.mjml')

@section('content')
<h3>Day 59 - Subject: The Bulldog family wants you!</h3>
<p>Dear @@{{First}},</p>

<p>As the MSIT online coordinator, I am here to help answer any questions that you have about the program.  You may begin during the start of fall, spring, or summer semesters.</p>

<img class="img-center" src="https://goto.msstate.edu/www/images/Distance/programs/msit/msit_banner.png" />

<p>Remember, the sooner you get your application completed, the closer you are to reaching your educational goals.</p>
<p>I look forward to hearing from you soon!</p>
<p>Thanks,</p>
@endsection

@section('signature')
	@include('signatures.vtate')
@endsection

@section('apply')
	@include('common.apply')
@endsection