@extends('layouts.mjml')

@section('content')
<h3>Day 0 - Subject: Thank you for your interest in the MATS at MSU!</h3>
<p>Dear @@{{First}},</p>

<p>Thank you for your interest in the online Master of Arts in Teaching-Secondary Teacher Alternate Route (MATS) degree program at Mississippi State University (MSU)!</p>

<p>The MATS program is designed for those holding a bachelor's degree in a content or discipline area other than education and seeking an initial teaching license in secondary education.</p>

<p>The 36-hour degree can be completed entirely online. Visit our website to see the types of <a href="https://online.msstate.edu/mats#program-structure">courses</a> that are affiliated with this program.</p>

<p><b>It's important to know that the GRE is not required.  Also, if you made at least a 21 on the ACT with no sub score below 18, you are exempt from Praxis Core!</b>  Please visit the <a href="https://online.msstate.edu/files/pdf/MATS-Admissions-Checklist.pdf">admissions checklist</a> for a complete overview of requirements to apply.</p>

<p><b>**We are no longer able to place students in Georgia for an internship. Residents living in the state of Georgia will not be eligible to teach in Georgia.**</b></p>

<p>Ready to apply? I'll be happy to assist you or answer any questions.</p>
<p>Thank you,</p>
@endsection

@section('signature')
	@include('signatures.sclardy')
@endsection

@section('apply')
	@include('common.apply')
@endsection