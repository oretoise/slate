@extends('layouts.mjml')

@section('content')
<h3>Day 7 - Subject: Start your application today!</h3>

<p>Dear @@{{First}},</p>
<p>Start your application for the online Master of Engineering program today!</p>

<p>Remember to choose <span style="color: #5D1725;"><b>Master of Engineering (MENG)</b></span> as your Major, either <span style="color: #5D1725;"><b>General</b></span> or <span style="color: #5D1725;"><b>Military</b></span> as your concentration, and <span style="color: #5D1725;"><b>Online Education</b></span> as your campus when applying for <a href="https://online.msstate.edu/engineering/admissions-process/">admission</a> or <a href="https://online.msstate.edu/engineering/admissions-process/">readmission</a>.  

<p>If you have any questions, just ask. We are happy to help.</p>
<p>Thank you for considering Mississippi State for your online degree.</p>
<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.dknox_swann.blade.php')
@endsection

@section('apply')
	@include('common.apply')
@endsection