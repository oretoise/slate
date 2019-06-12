@extends('layouts.responsive')

@section('content')
<h3>Day 3 - Subject: Earn your Master of Science in Early Intervention degree online!</h3>
<p>Dear *|FNAME|*,</p>

<img class="img-right" src="https://goto.msstate.edu/www/images/Distance/programs/msei/msei_1.png" />

<p>At Mississippi State University, we are excited to offer the only Master of Science in Early Intervention program in the state of Mississippi!  This degree is offered completely online!</p>

<p>Because MSU is accredited by the Southern Association of Colleges and Schools Commission on Colleges (SACSCOC), your courses will meet the same standards as on-campus courses.  Also, your online degree will not be differentiated from an on-campus degree.</p>

<p>If you are interested in designing and modifying evidence-based plans to improve the highest level of function for young children, this is the program for you.   
If you have questions, please ask. I'm happy to help!</p>
<p>Thank you,</p>
@endsection

@section('signature')
	@include('signatures.dknox')
@endsection

@section('apply')
	@include('common.apply')
@endsection