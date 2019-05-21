@extends('layouts.responsive')

@section('content')
<h3>Day 60 - Subject: The Bulldog family wants you!</h3>
<p>Dear *|FNAME|*,</p>

<p>
	Thank you again for your interest in the online Bachelor of Science in Interdisciplinary Studies (BSIS) degree program at Mississippi State University (MSU).  We just wanted to touch base with you again to see if you had any questions for us.
</p>

<img class="img-center" src="https://goto.msstate.edu/www/images/Distance/bsis/bsis_web_banner.png" />
@endsection

@section('signature')
	@include('signatures.ehawkins')
@endsection

@section('apply')
	@include('common.apply')
@endsection