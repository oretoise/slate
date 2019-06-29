@extends('layouts.responsive')

@section('content')
<h3>Day 7 - Subject: What is required for AMP?</h3>

<p>Dear @{{First}},</p>

<img class="img-right" src="https://goto.msstate.edu/www/images/Distance/programs/geosciences/amp/amp_2.png" />

<p>The Applied Meteorology master's degree requires 12 three-credit-hour courses for a total of 36 semester hours and can be earned in as little as two years (taking two courses per semester).</p>
<p>Fall admission is preferred, but applications are accepted at any time.  All the courses are taught online with exception of the capstone course.</p>
<p>The capstone course is designed around a week-long workshop that is hosted at Mississippi State University in Starkville, MS, during your final summer semester.</p>
<p>Check out the <a href="http://online.msstate.edu/pdf/recruiter/amp.pdf">flyer</a> for the Applied Meteorology master's degree; it provides detailed information about admissions, required courses, and finances.</p>
<p>Please let me know if you have any questions. I'm happy to help!</p>
<p>Sincerely,</p>
@endsection

@section('signature')
	@include('signatures.jbailey')
@endsection

@section('apply')
	@include('common.apply')
@endsection