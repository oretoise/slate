@extends('layouts.mjml')

@section('content')
<h3>Day 0 - Subject: Thank you for checking out MSU’s online Industrial Engineering program!</h3>
<p>Dear @@{{First}},</p>

<p>Thank you for checking out MSU’s online Bachelor of Science (BS) in Industrial Engineering degree program.</p>

<p>The BS in Industrial Engineering degree program is designed both for students who want to complete or start their degree completely online. </p>

<p>The Industrial Engineering program helps students develop a broad view of various systems across all work sectors. Industrial and systems engineering applies engineering methods and the principles of scientific management to the design, improvement, and installation of integrated systems of people, materials, information, equipment, and energy. The industrial and systems engineer drives increased productivity and quality improvement.</p>

<p>Check out how you can get started by:
<ul>
	<li>Reviewing our <a href="https://online.msstate.edu/bsie#program-structure">program curriculum</a> information</li>
	<li>Requesting a free transcript evaluation</li>
</ul></p>

<p>Students can transfer applicable and approved coursework from accredited community colleges and/or four-year institutions into the Industrial Engineering degree too.</p>

<p>Because MSU is accredited by the Southern Association of Colleges and Schools Commission on Colleges (SACSCOC), your courses will meet the same standards as on-campus courses. Also, your online degree will not be differentiated from an on-campus degree.</p>

<p>Are you ready to <a href="https://www.online.msstate.edu/bsie#admissions-process">apply</a>? If you have any questions or concerns, please contact us. We are ready to help.</p>
@endsection

@section('signature')
@include('signatures.arijal_swann')
@endsection

@section('apply')
	@include('common.apply')
@endsection