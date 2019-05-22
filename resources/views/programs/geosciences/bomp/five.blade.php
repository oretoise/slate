@extends('layouts.responsive')

@section('content')
<h3>Day 5 - Subject: If you have questions, we have answers!</h3>
<p>Dear *|FNAME|*,</p>

<p>
	<img class="img-right" src="https://goto.msstate.edu/www/images/Distance/bomp/bomp_2.png" />
	Wondering if the time to start is now?  Here are some answers to frequently asked questions to help you confidently take the next step.
</p>

<ol>
	<li>
		<span style="color: #800000;"><b>Is this program completely online?</b></span><br/>
		Yes, all 17 meteorology courses are offered entirely online. Only certificate-seeking students have a campus visit requirement. This is a three-day workshop held on the MSU campus in Starkville, MS, upon completion of all 17 meteorology courses.<br/><br/>
	</li>
	<li>
		<span style="color: #800000;"><b>How long does it take to complete the program?</b></span><br/>
		Students take two courses per semester to complete the 17 meteorology courses in three years. New students must begin the program in the fall semester, unless they plan to complete general education requirement before the meteorology requirements.<br/><br/>
	</li>
	<li>
		<span style="color: #800000;"><b>Do you accept transfer credit?</b></span><br/>
		All courses taken at another accredited institution are recorded on the student’s permanent record; however, the student’s academic advisor determines the applicability of the work toward degree requirements.
	</li>
</ol>

<p>For more frequently asked questions, visit our website, or contact me directly. I'm happy to help.</p>
<p>Sincerely,</p>
@endsection

@section('signature')
	@include('signatures.jbailey')
@endsection

@section('apply')
	@include('common.apply')
@endsection