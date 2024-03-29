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
    <b>Stephanie Etheridge</b><br/>
    <i>MAT Advisor</i><br/>
    662.325.1999<br/>
    <a href="mailto:setheridge@colled.msstate.edu">setheridge@colled.msstate.edu</a>
</p>

<p>
    <b>Anusha Rijal</b><br/>
    <i>Distance Coordinator</i><br/>
    662.325.8876<br/>
    <a href="mailto:a.rijal@msstate.edu">a.rijal@msstate.edu</a>
</p>

<p>We are here to help throughout your academic career!</p>
<p>Thank you,</p>
@endsection

@section('signature')
	@include('signatures.ssteward')
@endsection

@section('apply')
	@include('common.apply')
@endsection