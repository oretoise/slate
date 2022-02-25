@extends('layouts.mjml')

@section('content')
<h3>Day 14 - Subject: FAQ about the Online Foreign Languages Program</h3>
<p>Dear @@{{First}},</p>

<p>Wondering if the time to start is now?  Here are some answers to frequently asked questions to help you confidently take the next step.</p>

<ul>
	<li>
		<span style="color: #5D1725;"><b>Is this program completely online?</b></span><br/>
		Yes, all of the MA in Foreign Languages courses are taught online.<br/><br/>
	</li>
	<li>
		<span style="color: #5D1725;"><b>How long does it take to complete the program?</b></span><br/>
		The degree can be completed in as little as two years by taking two courses per semester.<br/><br/>
	</li>
	<li>
		<span style="color: #5D1725;"><b>Are there prerequisites to be considered for admission?</b></span><br/>
		A bachelor's degree with an overall GPA of at least 2.75 on the last 60 credit hours is needed.
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