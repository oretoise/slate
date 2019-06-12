@extends('layouts.responsive')

@section('content')
<h3>Day 3 - Subject: Earn your Master of Agribusiness Management degree online!</h3>
<p>Dear *|FNAME|*,</p>

<img class="img-right" src="https://goto.msstate.edu/www/images/Distance/programs/mabm/mabm_1.png" />

<p>As Mississippi State University’s premier, land-grant, research institution, we are excited to offer this agriculture-related degree fully online!</p>
<p><b>Program Highlights:</b></p>
<ul>
    <li>31 hours to complete</li>
    <li>In-state tuition for all students</li>
    <li>Coursework offered through partnership with the nationally-recognized MBA program</li>
</ul>

<p>Because MSU is accredited by the Southern Association of Colleges and Schools Commission on Colleges (SACSCOC), your courses will meet the same standards as on-campus courses.  Also, your online degree will not be differentiated from an on-campus degree.</p>

<p>If you are interested in securing the skills required to analyze numbers and make solid problem-solving decision in the fast-growing, complex, global agribusiness industry, this is the program for you.</p>

<p>If you have questions, please ask.</p>
<p>Thank you,</p> 
@endsection

@section('signature')
	@include('signatures.dknox')
@endsection

@section('apply')
	@include('common.apply')
@endsection