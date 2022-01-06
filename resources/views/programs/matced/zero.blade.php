@extends('layouts.mjml')

@section('content')
<h3>Day 0 - Subject: Thank you for your interest in MSU's MATCED program!</h3>
<p>Dear @@{{First}},</p>

<p>Thank you for your interest in the online Master of Arts in Teaching in Community College Education (MATCED) degree program at Mississippi State University!</p>

<p>The MATCED program is a 30-credit hour interdisciplinary, online degree program designed to prepare professionals for teaching in a community college setting.</p>

<p>
    <b>Requirements</b><br/>
    It is important to know that the <b>GRE is not required</b> for the MATCED program.  View the <a href="https://online.msstate.edu/matced/admissions-process">Admission Requirements</a> for a complete overview of what you need to apply to the MATCED.
</p>

<p>If you have any questions just ask. I'm happy to help!</p>
<p>Thank you,</p>
@endsection

@section('signature')
	@include('signatures.sclardy')
@endsection

@section('apply')
	@include('common.apply')
@endsection