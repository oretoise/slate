@extends('layouts.mjml')

@section('content')
<h3>Day 60 - Subject: The Bulldog family wants you!</h3>
<p>Dear @@{{First}},</p>
<p>I wanted to send you two quick reminders:</p>
<ol>
    <li>You may only start the Vision Specialist Certificate program during the start of the <b>spring</b> semester.</li><br/><br/>
    <li>If you haven't already applied, the sooner you get your application completed, the closer you are to reaching your educational goals.</li>
</ol>

<img class="img-center" src="https://goto.msstate.edu/www/images/Distance/programs/vision/vision_banner.png" />

<p>As the Vision Specialist certificate online coordinator, I am here to answer any questions that you have about the program.</p>
<p>Let me know if I can do anything to help!</p>
<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.vtate')
@endsection

@section('apply')
	@include('common.apply')
@endsection