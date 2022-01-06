@extends('layouts.mjml')

@section('content')
<h3>Day 10 - Subject: Meet your team!</h3>
<p>Dear @@{{First}},</p>

<p>Here at Mississippi State University, you have a team of staff to support you in the pursuit of your MATS degree.</p>

<p>
    <b>Susan Steward</b><br/>
    <i>MAT Coordinator</i><br/>
    662.325.0527<br/>
    <a href="mailto:ssteward@colled.msstate.edu">ssteward@colled.msstate.edu</a>
</p>

<p>
    <b>Katrina Miller</b><br/>
    <i>MATS Coordinator / Advisor</i><br/>
    662.325.1999<br/>
    <a href="mailto:kmiller@colled.msstate.edu">kmiller@colled.msstate.edu</a>
</p>

<p>
    <b>Samantha Clardy</b><br/>
    <i>Distance Coordinator</i><br/>
    662.325.9092<br/>
    <a href="mailto:s.clardy@msstate.edu">s.clardy@msstate.edu</a>
</p>

<p>We are here to help throughout your academic career!</p>
<p>Thank you,</p>
@endsection

@section('signature')
	@include('signatures.sclardy')
@endsection

@section('apply')
	@include('common.apply')
@endsection