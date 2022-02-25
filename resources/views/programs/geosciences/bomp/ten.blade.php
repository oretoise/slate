@extends('layouts.mjml')

@section('content')
<h3>Day 10 - Subject: What Can You do with this Degree?</h3>
<p>Dear @@{{First}},</p>
<p>
	<img class="img-right" src="https://goto.msstate.edu/www/images/Distance/bomp/bomp_3.png" />
	Did you know that one in three current broadcast meteorologists were trained through Mississippi State University?
</p>

<p>Many of our graduates of the online Broadcast/Operational Meteorology Program (BOMP) are employed as weathercasters at television stations and forecasters for private companies and the military.</p>
<p>Visit the <a href="https://online.msstate.edu/bomp">website</a> for more information.</p>
<p>If this interests you, please contact me today!</p>
<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.jbailey')
@endsection

@section('apply')
	@include('common.apply')
@endsection