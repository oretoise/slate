@extends('layouts.responsive')

@section('content')
<h3>Day 55 - Subject: The Bulldog family wants you!</h3>
<p>Dear @{{First}},</p>

<p>Thank you again for your interest in the <a href="http://online.msstate.edu/bba">Online BBA program</a> at Mississippi State University. I just wanted to touch base with you again to see if you had any follow up questions.</p>

<p>As your online coordinator, I am here to assist you with any questions you have regarding the program.</p>
<p>I look forward to hearing from you soon.</p>
<p>Sincerely,</p>
@endsection

@section('signature')
    @include('signatures.mjimerson')
@endsection

@section('apply')
    @include('common.apply')
@endsection