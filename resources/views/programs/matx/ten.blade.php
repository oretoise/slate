@extends('layouts.responsive')

@section('content')
<h3>Day 10 - Subject: Meet your MATX Team!</h3>
<p>Dear @{{First}},</p>

<p>We'd love to get to know you. Contact us with any question you may have about the MATX program.</p>

<p>
    <b>Dr. Bethany McKissick</b><br/>
    <i>MATX Grad Coordinator</i><br/>
    <a href="mailto:brs266@msstate.edu">brs266@msstate.edu</a>
</p>

<p>
    <b>Ms. Susan Steward</b><br/>
    <i>MAT Coordinator</i><br/>
    662.325.0527<br/>
    <a href="mailto:ssteward@colled.msstate.edu">ssteward@colled.msstate.edu</a>
</p>

<p>
    <b>Ms. Valerie Tate</b><br/>
    <i>Distance Coordinator</i><br/>
    662.325.8876<br/>
    <a href="mailto:v.tate@msstate.edu">v.tate@msstate.edu</a>
</p>

<p>We are here to help throughout your academic career!</p>
<p>Thank you,</p>
@endsection

@section('signature')
	@include('signatures.vtate')
@endsection

@section('apply')
	@include('common.apply')
@endsection