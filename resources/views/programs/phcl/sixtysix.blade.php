@extends('layouts.responsive')

@section('content')
<h3>Day 66 - Subject: The Bulldog family wants you!</h3>
<p>Dear @{{First}},</p>

<p>As your PHCL online coordinator, I am here to help answer any questions you have about the program.</p>

<p>You may start the online PHCL program at the start of fall, spring, or summer semesters.  The sooner you get your application completed, the closer you will be to reaching your educational goals.</p>

<img class="img-center" src="https://goto.msstate.edu/www/images/Distance/programs/phcl/phcl_banner.png" />

<p>Are you ready to apply today?  I look forward to hearing from you soon!</p>
<p>Thank you,</p>
@endsection

@section('signature')
	@include('signatures.vtate')
@endsection

@section('apply')
	@include('common.apply')
@endsection