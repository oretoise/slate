@extends('layouts.mjml')

@section('content')
<h3>Day 3 - Subject: Earn your Master of Science in Forestry degree online!</h3>

<p>Dear @@{{First}},</p>

<img class="img-right" src="https://goto.msstate.edu/www/images/Distance/programs/forestry/forestry_1.png" />

<p><b>Program Highlights:</b></p>
<ul>
    <li>30 credit hours to complete</li>
    <li>6 hour thesis option</li>
    <li>In-state tuition rate, no matter your state of residency</li>
</ul>

<p>This degree prepares students for the following career paths:</p>
<ul>
    <li>Forest Products Industry</li>
    <li>Firms or institutes</li>
    <li>Non-profit Organization</li>
    <li>Sales Positions</li>
    <li>University or College</li>
    <li>Federal, State, and Local Government</li>
</ul>

<p>If you are interested in securing the skills required to cultivate, maintain, and develop forests for current and future use, this is the program for you.</p>
<p>Let me know if you have questions.  I'm happy to help!</p>
<p>Thank you,</p>
@endsection

@section('signature')
	@include('signatures.dknox')
@endsection

@section('apply')
	@include('common.apply')
@endsection