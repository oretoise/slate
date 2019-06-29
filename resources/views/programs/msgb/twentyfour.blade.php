@extends('layouts.responsive')

@section('content')
<h3>Day 24 - Subject: Need an endorsement? Want to teach?</h3>
<p>Dear @{{First}},</p>

<img class="img-right" src="https://goto.msstate.edu/www/images/Distance/programs/msgb/msgb_2.png" />

<p>Are you a teacher in need of an endorsement? Do you want to teach at the community college level? If so, the online Master of Science in General Biology program may help you reach your goals.</p>

<p>Since each state has its own criteria for advancement and certification, please contact your state's Department of Education to see how this program relates to their requirements.</p>

<p>New students typically begin the program in the fall semester. The admission deadline is <b>August 1st</b>.  For information about the application process, review the <a href="http://online.msstate.edu/msgb/admissions">admission requirements</a>.</p>

<p>I hope you have a great day!</p>
<p>Sincerely,</p>
@endsection

@section('signature')
	@include('signatures.jbailey')
@endsection

@section('apply')
	@include('common.apply')
@endsection