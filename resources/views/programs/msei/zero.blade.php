@extends('layouts.responsive')

@section('content')
<h3>Day 0 - Subject: Thanks for your interest in the MSEI program!</h3>
<p>Dear @{{First}},</p>

<p>Thank you for your interest in the online Master of Science in Early Intervention (MSEI) program at Mississippi State University.</p>

<p>This innovative and comprehensive program is designed to address the shortage of trained professionals with expertise in working with infants, toddlers, and preschoolers with special needs, and their families.</p>

<p>Early Intervention specialists are child development experts who design and modify evidence-based plans to improve the highest level of function for young children.</p>

<p>The MSEI program is designed to prepare students for career opportunities in some of the following areas:</p>

<ul>
    <li>IDEA-Part C programs</li>
    <li>Early Care programs</li>
    <li>Education programs</li>
    <li>Preschool classrooms</li>
    <li>Hospitals</li>
    <li>Clinics</li>
</ul>

<p>I will follow up with any questions you had in your request for information query shortly.  In the meantime, please view our <a href="http://online.msstate.edu/pdf/slate/Master-of-Science-Early-Intervention.pdf">program brochure</a> detailing admission requirements, prerequisites, and program curriculum.</p>
<p>Let me know if you have any questions. I'm happy to help!</p>
<p>Thank you,</p> 
@endsection

@section('signature')
	@include('signatures.dknox')
@endsection

@section('apply')
	@include('common.apply')
@endsection