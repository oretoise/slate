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
		<span style="color: #5D1725;"><b>Does this program have a non-thesis and thesis option?</b></span><br/>
		Yes, this program offers thesis and non-thesis options to students.  Students will choose either a thesis or non-thesis option when they apply by selecting their concentration: either Research or General.<br/><br/>
	</li>
	<li>
		<span style="color: #5D1725;"><b>Does this program require comprehensive examinations?</b></span><br/>
		Yes, this program offers an oral comprehensive examination. The oral exam is given near the time of graduation and students must pass the comprehensive examinations to be able to graduate from the program.<br/><br/>
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