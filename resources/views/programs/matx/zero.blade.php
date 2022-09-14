@extends('layouts.mjml')

@section('content')
<h3>Day 0 - Subject: Thank you for your interest in the MATX program at MSU!</h3>
<p>Dear @@{{First}},</p>

<p>Thank you for your interest in the online Master of Arts in Teaching-Special Education (MATX) degree program at Mississippi State University (MSU)! The MATX degree prepares individuals to teach mild to moderate special education classes in grades 7-12. Upon the completion of the degree and with passing scores on the Foundations of Reading test, individuals will be able to teach special education in grades K-12.</p>

<p>This 33-hour program can be completed entirely online.  It is important to know that the <b>GRE is not required, and if you made at least a 21 on the ACT with no sub score below 18, you are exempt from Praxis Core!</b></p>

<p>Please visit our website for more information about the <a href="https://online.msstate.edu/matx#admissions-process">requirements for enrolling</a> in the MATX program.</p>

<p><b>**We are no longer able to place students in Georgia for an internship. Residents living in the state of Georgia will not be eligible to teach in Georgia.**</b></p>

<p>Ready to apply? I'll be happy to assist you or answer any questions!</p>
<p>Thank you,</p>
@endsection

@section('signature')
	@include('signatures.arijal')
@endsection

@section('apply')
	@include('common.apply')
@endsection