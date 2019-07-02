@extends('layouts.responsive')

@section('content')
<h3>Day 59 - Subject: The Bulldog family wants you!</h3>
<p>Dear @{{First}},</p>

<p>As the WEL program coordinator, I am here to help answer any questions that you have about the online master’s program. You may start the WEL program during the start of fall, spring, or summer semesters.  The sooner you get your application completed, the closer you are to reaching your educational goals.</p>

<img class="img-center" src="https://goto.msstate.edu/www/images/Distance/programs/wel/wel_banner.png" />

<p>Are you ready to apply today?</p>
<p>I look forward to working with you!</p>
<p>Thank you,</p> 
@endsection

@section('signature')
	@include('signatures.vtate')
@endsection

@section('apply')
	@include('common.apply')
@endsection