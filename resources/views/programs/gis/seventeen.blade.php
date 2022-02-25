@extends('layouts.mjml')

@section('content')
<h3>Day 17 - Subject: Common Questions about the GIS Certificate</h3>
<p>Dear @@{{First}},</p>

<p>Wondering if the time to start is now?  Here are some answers to frequently asked questions to help you confidently take the next step.</p>

<ul>
	<li>
		<span style="color: #5D1725;"><b>Is this program completely online?</b></span><br/>
		Yes, all certificate courses are offered entirely online.<br/><br/>
	</li>
	<li>
		<span style="color: #5D1725;"><b>How long does it take to complete the program?</b></span><br/>
		Students typically take two courses per semester to complete the five courses in one year. New students should begin the program in the fall semester unless they have already completed some of the required courses.<br/><br/>
	</li>
	<li>
		<span style="color: #5D1725;"><b>Do you accept transfer credit?</b></span><br/>
		Yes. All courses taken at another accredited institution are recorded on the student's permanent record; however, the student's academic advisor determines the applicability of the work toward degree requirements.
	</li>
</ul>

<p>For more frequently asked questions, check out our <a href="https://online.msstate.edu/faq">FAQ Page</a>.</p>
<p>If you have other questions or if we can assist you in any way, please contact us.  We are ready to help.</p>
<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.jbailey')
@endsection

@section('apply')
	@include('common.apply')
@endsection