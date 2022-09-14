@extends('layouts.mjml')

@section('content')
<h3>Day 3 - Subject: Before applying to the online Elementary Ed program</h3>
<p>Dear @@{{First}},</p>

<p>
	<img class="img-right" src="https://goto.msstate.edu/www/images/Distance/elem/elem2.png" />
	Before applying to the online ELED program, I encourage you to check with your local school to make sure they will allow you to set up in-class observations and the student teaching internship (during your junior and senior years) at their schools.
</p>

<p>
	While the core courses are all offered online, all of the elementary education courses taken during the last two years of the degree program require extensive field experiences.  You must be able to complete these field experiences to earn your degree, which includes 2-6 hours a week during the school day in your junior year.
</p>

<p>During a teacher candidate's junior and senior year in the program, the courses will require the following field experience hours:</p>

<ul>
	<li>Early Block: approximately 15 hours in K-3rd grade classrooms</li>
	<li>Middle Block: approximately 25 hours in 4th-8th grade classrooms</li>
	<li>Senior Block: approximately 120 hours in 2nd-8th grade classrooms</li>
	<li>Teaching Internships: Full-time in a K-6th classroom</li>
</ul>

<p style="font-size: 12pt;"><b>Licensure</b></p>
<p>
	You will ONLY be licensed to teach in the state of Mississippi when you finish your elementary education degree online. If you plan to teach in another state, you are responsible for contacting your own state Department of Education to find out the requirements for a teaching license in that state.
</p>

<p>
	<b>**We are no longer able to place students in Georgia for an internship. Residents living in the state of Georgia will not be eligible to teach in Georgia.**</b>
</p>

<p>Ready to apply? I'm happy to assist you or answer any questions.</p>
<p>Thanks,</p>
@endsection

@section('signature')
	@include('signatures.arijal')
@endsection

@section('apply')
	@include('common.apply')
@endsection