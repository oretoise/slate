@extends('layouts.mjml')

@section('content')
<h3>Day 3 - Subject: Earn your Child Development degree online!</h3>

<p>Dear @@{{First}},</p>

<p>At Mississippi State University, we are excited to offer the Bachelor of Science in Human Development and Family Science with a concentration in Youth Development.  This degree is offered completely online! </p>
<p>Because MSU is accredited by the Southern Association of Colleges and Schools Commission on Colleges (SACSCOC), your courses will meet the same standards as on-campus courses.  Also, your online degree will not be differentiated from an on-campus degree.</p>
<p>If you are interested in a program that prepares you to understand and work effectively with children and adolescents, ages 10-18, in a variety of settings, then this program is for you.</p>
<p>If you have questions, please ask. I'm happy to help!</p>
<p>Thank you,</p>
@endsection

@section('signature')
	@include('signatures.mwolfe')
@endsection

@section('apply')
	@include('common.apply')
@endsection