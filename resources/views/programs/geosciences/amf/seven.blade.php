@extends('layouts.responsive')

@section('content')
<h3>Day 7 - Subject: If you have questions, we have answers at MSU!</h3>

<p>Dear @@{{First}},</p>

<img class="img-right" src="https://goto.msstate.edu/www/images/Distance/programs/geosciences/amf/amf_2.png" />

<p>Wondering if the time to start your AMF certificate is now?  Here are some answers to frequently asked questions to help you confidently take the next step.</p>

<ul>
	<li>
		<b>Is this program completely online?</b><br/>
		Yes, all 11 meteorology courses are offered entirely online.
	</li><br/>
	<li>
		<b>How long does it take to complete the program?</b><br/>
		Students typically take two courses per semester to complete the 11 meteorology courses in two years. New students should begin the program in the fall semester, unless they have already completed some of the required courses or have not yet taken an introductory meteorology course.
	</li><br/>
	<li>
		<b>Do you accept transfer credit?</b><br/>
		All courses taken at another accredited institution are recorded on the student’s permanent record; however, the student’s academic advisor determines the applicability of the work toward degree requirements.
	</li>
</ul>

<p>For more frequently asked questions, visit our <a href="https://online.msstate.edu/geosciences/amf/">website</a>, or ask me directly. I'm happy to help!</p>
<p>Sincerely,</p>
@endsection

@section('signature')
	@include('signatures.jbailey')
@endsection

@section('apply')
	@include('common.apply')
@endsection