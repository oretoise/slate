@extends('layouts.mjml')

@section('content')
<h3>Day 3 - Subject: If you have questions, we have answers!</h3>

<p>Dear @@{{First}},</p>

<p>Wondering if the time is now to start the Public Procurement Certificate? Here are few answers to frequently asked questions to help you confidently take the next step.</p>

<ol>
	<li>
		<span style="color: #5D1725;"><b>Is this certificate offered completely online?</b></span><br/>
		Yes, the Public Procurement Certificate is completely online.<br/><br/>
	</li>
	<li>
		<span style="color: #5D1725;"><b>2.	How many credit hours are required to complete this certificate?</b></span><br/>
		This program comprises four three-credit courses, each of which will position the student be a competent and knowledgeable participant and stakeholder in their entity's procurement and contract management function.<br/><br/>
	</li>
	<li>
		<span style="color: #5D1725;"><b>3.	How do I apply for this online certificate? </b></span><br/>
		To apply, please visit our <a href="https://www.online.msstate.edu/ppc#admissions-process">website</a> and follow the steps under the Admissions Process section.<br/><br/>
	</li>
	
</ol>

<p>The earlier you <a href="https://www.online.msstate.edu/ppc#admissions-process">submit your application</a>, the better chance you have of getting accepted into the program. </p>
<p>If you have any other question or if I can assist you in any way, please contact me. I'm happy to help!</p>
@endsection

@section('signature')
	@include('signatures.lhudson')
@endsection

@section('apply')
	@include('common.apply')
@endsection