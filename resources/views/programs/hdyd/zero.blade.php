@extends('layouts.mjml')

@section('content')
<h3>Day 0 - Subject: Thank you for checking out MSU's online Child Development program!</h3>

<p>Dear @@{{First}},</p>

<p>Thank you for checking out MSU’s online Bachelor of Science (BS) in Human Development and Family Science with a concentration in Youth Development degree program. </p>

<p>The BS in Human Development and Family Science with a concentration in Youth Development degree program is designed both for students who want to complete or start their degree completely online. The Youth Development concentration prepares you to understand and work effectively with children and adolescents, ages 10-18, in a variety of settings.  The program provides students with a comprehensive view of the needs and developmental characteristics of youths, as well as the challenges facing today’s youths. </p>

<p><b>What can you do with a BS in Human Development and Family Science with a concentration in Youth Development?</b></p>

<p>A BS in Human Development and Family Science with a concentration in Youth Development degree online opens doors to many career opportunities in a variety of fields, including:
<ul>
	<li>recreation and sports</li>
	<li>juvenile justice</li>
	<li>extension (4-H and Family & Consumer Sciences)</li>
	<li>human services</li>
	<li>out-of-school programming</li>
	<li>military family support services</li>
	<li>youth ministry</li>
</ul></p>

<p>Check out how you can get started by:
<ul>
	<li>Reviewing our <a href="https://online.msstate.edu/hdyd#program-structure">program curriculum</a> information</li>
	<li>Requesting more information</li>
</ul></p>

<p>Students can transfer applicable and approved coursework from accredited community colleges and/or four-year institutions into the program as well.</p>

<p>If you have any questions or concerns, please contact me. I am ready to help.</p>
@endsection

@section('signature')
	@include('signatures.mwolfe')
@endsection

@section('apply')
	@include('common.apply')
@endsection