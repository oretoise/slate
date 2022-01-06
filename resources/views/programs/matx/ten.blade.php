@extends('layouts.mjml')

@section('content')
<h3>Day 10 - Subject: Meet your MATX Team!</h3>
<p>Dear @@{{First}},</p>

<p>We'd love to get to know you. Contact us with any question you may have about the MATX program.</p>

<p>
    <b>Ms. Susan Steward</b><br/>
    <i>MAT Coordinator</i><br/>
    662.325.0527<br/>
    <a href="mailto:ssteward@colled.msstate.edu">ssteward@colled.msstate.edu</a>
</p>

<p>
    <b>Ms. Samantha Clardy</b><br/>
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