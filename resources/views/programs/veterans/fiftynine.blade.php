@extends('layouts.responsive')

@section('content')
<h3>Day 59 - Subject: The Bulldog family wants you!</h3>
<p>Dear @{{First}},</p>

<p>The VCP was designed to train individuals who currently work or want to work in the VA benefits arena to help veterans and their dependents successfully transition to civilian life.</p>

<img class="img-center" src="https://goto.msstate.edu/www/images/Distance/programs/veterans/veterans_banner.png" />

<p>You may start the VCP program during the start of fall, spring, or summer semesters.  The sooner you get your application completed, the closer you are to reaching your educational goals.</p>

<p>As the VCP online coordinator, I am here to answer any questions you have about the program.</p>

<p>Are you ready to apply today? I look forward to hearing from you soon!</p>
<p>Thanks,</p>
@endsection

@section('signature')
	@include('signatures.vtate')
@endsection

@section('apply')
	@include('common.apply')
@endsection