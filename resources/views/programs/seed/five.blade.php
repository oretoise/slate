@extends('layouts.responsive')

@section('content')
<h3>Day 5 - Subject: What will I be able to teach?</h3>
<p>Dear @{{First}},</p>

<p>You can earn your initial licensure and then teach full time in the state of MS while completing the SEED degree online!</p>

<p>Choose one of the following content areas as your initial licensure area.  You add endorsements to your license later.</p>

<p><b>Grades K-12</b></p>
<ul>
    <li>Foreign Language</li>
    <li>Physical Education</li>
</ul>

<p><b>Grades 7-12</b></p>
<ul>
    <li>Biology</li>
    <li>Business</li>
    <li>Chemistry</li>
    <li>English/Languages Arts</li>
    <li>Physics</li>
    <li>Reading</li>
    <li>Social Studies</li>
    <li>Math</li>
    <li>Other (see advisor)</li>
</ul>

<p>Ready to apply? I'll be happy to assist you or answer any questions.</p>
<p>Thank you,</p>
@endsection

@section('signature')
	@include('signatures.vtate')
@endsection

@section('apply')
	@include('common.apply')
@endsection