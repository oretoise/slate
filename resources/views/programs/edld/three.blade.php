@extends('layouts.mjml')

@section('content')
<h3>Day 3 - Subject: If you have questions, we have answers!</h3>
<p>Dear @@{{First}},</p>

<img class="img-right" src="https://goto.msstate.edu/www/images/Distance/edld/edld_1.png" />

<p>Wondering if the time is now to start the Master of Science in Educational Leadership with a concentration in School Administration (EDLD-EDLS)?  Here are some answers to frequently asked questions to help you confidently take the next step.</p>

<ol>
    <li>
        <b>Is this program offered completed online?</b><br/>
        Yes, the EDLD-EDLS courses are 100% online; however, two internships are required.
    </li><br/>
    <li>
        <b>Do you accept transfer credit?</b><br/>
        Yes, a total of nine (9) hours can be transferred to a student’s program of study from an accredited four-year university and are subject to approval by the Registrar’s Office and your advisor.
    </li><br/>
    <li>
        <b>What are the application deadlines?</b>
        <ul>
            <li>Fall semester: <b>August 1</b></li>
            <li>Spring semester: <b>December 1</b></li>
            <li>Summer semester: <b>May 15</b></li>
        </ul>
    </li>
</ol>

<p>The earlier you submit your application, the better chance you have of getting the courses that you need.</p>
<p>Do you have additional questions? I'm happy to help!</p>
<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.sclardy')
@endsection

@section('apply')
	@include('common.apply')
@endsection