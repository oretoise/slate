@extends('layouts.mjml')

@section('content')
<h3>Day 0 - Subject: Thank you for checking out MSU's online Companion Animal Management Certificate!</h3>

<img class="img-right" src="https://goto.msstate.edu/www/images/Distance/programs/animal/kitten.png" alt="Kitten with red collar" />

<p>Dear @@{{First}},</p>

<p>Thank you for checking out MSU's online, non-thesis Companion Animal Management Certificate.</p>

<p>If you are applying as a <b>GRADUATE</b> student, your application must be submitted by the semester deadline in which you plan to enroll:</p>

<ul>
	<li>Fall Admission Deadline:  <b>August 1</b></li>
	<li>Spring Admission Deadline:  <b>December 1</b></li>
	<li>Summer Admission Deadline:  <b>May 15</b></li>
</ul>

<p>Because MSU is accredited by the Southern Association of Colleges and Schools Commission on Colleges (SACSCOC) and the Association to Advance Collegiate Schools of Business, your courses will meet the same standards as on-campus courses.</p>

<p>Are you ready to <a href="https://online.msstate.edu/{{ $program }}#admissions-process">apply</a>? If you have any questions or concerns, please contact us. We are ready to help.</p>

<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.dknox')
@endsection

@section('apply')
	@include('common.apply')
@endsection