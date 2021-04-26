@extends('layouts.mjml')

@section('content')
<h3>Day 70 - Subject: There's Still Time to Apply for the Online MPA/MTAX program!</h3>
<p>Dear @@{{First}},</p>
<p>Thank you again for your interest in the online <a href="https://online.msstate.edu/mtpa/" title=" MTPA Program Website">MPA/MTAX program</a> at Mississippi State University. I wanted to touch base with you again to see if you had any follow up questions.</p>
<p>As your online coordinator, I am here to assist you with any questions you have regarding the program.</p>
<p>I look forward to hearing from you soon.</p>
<p>Sincerely,</p>
@endsection

@section('signature')
	@include('signatures.sclardy')
@endsection

@section('apply')
	@include('common.apply')
@endsection