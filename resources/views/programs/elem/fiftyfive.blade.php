@extends('layouts.mjml')

@section('content')
<h3>Day 55 - Subject: There's Still Time to Apply for the Elementary Ed Program</h3>

<img class="img-center" src="https://goto.msstate.edu/www/images/Distance/elem/ElemntryEdWbstBnnrFnlMy17MR3067ATM2.png" />
<p>Dear @@{{First}},</p>
<p>I wanted to touch-base with you to see if you had any questions about Bachelor of Science in Elementary Education online program.</p>
<p>I wanted to remind you that you can start the teacher education program in the fall or spring semester; however, if you have core classes to take, you can start those in the summer. The sooner you get your application completed, the closer you are to reaching your educational goals.</p>
<p>As the ELEM distance coordinator, I am here to help you in each step of the application process and to answer any questions that you have about the program.</p>
<p>Are you ready to <a href="https://online.msstate.edu/elem/admissions-process">apply</a> today?</p>
<p>I look forward to hearing from you soon!</p>
<p>Thanks,</p>
@endsection

@section('signature')
	@include('signatures.sclardy')
@endsection

@section('apply')
	@include('common.apply')
@endsection