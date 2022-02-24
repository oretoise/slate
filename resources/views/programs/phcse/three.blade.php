@extends('layouts.mjml')

@section('content')
<h3>Day 3 - Subject: If you have questions, we have answers!</h3>

<p>Dear @@{{First}},</p>

<p>Wondering if the time to start is now?  Here are some answers to frequently asked questions to help you confidently take the next step.</p>

<ul>
	<li>
		<span style="color: #5D1725;"><b>Do you accept transfer credit?</b></span><br/>
		Yes, you may transfer up to 9 hours from an accredited university. A formal <a href="https://www.grad.msstate.edu/students/forms">transfer approval</a> form must be submitted to receive credit.<br/><br/>
	</li>
	<li>
		<span style="color: #5D1725;"><b>Does this program require comprehensive examinations?</b></span><br/>
		Yes. During preparation for the doctoral degree, the student will be required to complete three examinations, including the final dissertation defense.  Additional information about these examinations can be found at <a href="https://www.cse.msstate.edu/grad/phd-cs/exam/">here</a>.<br/><br/>
	</li>
	<li>
		<span style="color: #5D1725;"><b>Can the entire program be completed online?</b></span><br/>
		Yes, the coursework can be completed 100% online.<br/><br/>
	</li>
</ul>

<p>If you have other questions or if we can assist you in any way, please contact us.  We are ready to help.</p>
<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.dknox_swann')
@endsection

@section('apply')
	@include('common.apply')
@endsection