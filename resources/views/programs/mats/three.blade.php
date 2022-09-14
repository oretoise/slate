@extends('layouts.mjml')

@section('content')
<h3>Day 3 - Subject: What can you teach with a MATS degree from MSU?</h3>
<p>Dear @@{{First}},</p>

<p>You can earn your initial licensure and then teach full time in the state of MS while completing the MATS degree online!  Our <a href="https://online.msstate.edu/mats#licensure-and-endorsements">licensure and endorsements</a> section provides detailed information regarding that process.</p>

<p>Choose one of the following content areas as your initial licensure area. You may add additional endorsements to your license later, if you wish.</p>

<p><b>Grades K-12</b></p>
<ul>
    <li>French</li>
    <li>Physical Education</li>
    <li>Spanish</li>
</ul>

<p><b>Grades 7-12</b></p>
<ul>
    <li>Biology</li>
    <li>Chemistry</li>
    <li>English/Language Arts</li>
    <li>Physics</li>
    <li>Social Studies</li>
    <li>Math</li>
</ul>

<p><b>**We are no longer able to place students in Georgia for an internship. Residents living in the state of Georgia will not be eligible to teach in Georgia.**</b></p>

<p>Ready to apply? I'll be happy to help!</p>
<p>Thank you,</p>
@endsection

@section('signature')
	@include('signatures.ssteward')
@endsection

@section('apply')
	@include('common.apply')
@endsection