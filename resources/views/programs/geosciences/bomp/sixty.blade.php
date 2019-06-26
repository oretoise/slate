@extends('layouts.responsive')

@section('content')
<h3>Day 60 - Subject: There’s Still Time to Apply!</h3>
<img class="img-center" src="https://goto.msstate.edu/www/images/Distance/bomp/BOMP_GscncsWbstBnnrAp17MR3073.png" />

<p>Dear @{{First}},</p>
<p>The sooner you get your application completed, the closer you are to reaching your educational goals.</p>
<p>As the online Broadcast and Operational Meteorology program coordinator, I am here to help you with any questions you have about the program.</p>
<p>Are you ready to <a href="http://distance.msstate.edu/geosciences/bomp/admissions">apply</a> today?  The fall deadline is August 1.  Let me know what I can do to assist you.</p>
<p>Sincerely,</p>

@endsection

@section('signature')
	@include('signatures.jbailey')
@endsection

@section('apply')
	@include('common.apply')
@endsection