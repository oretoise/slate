@extends('layouts.mjml')

@section('content')
<h3>Day 3 - Subject: If you have questions, we have answers!</h3>

<p>Dear @@{{First}},</p>

<p>Wondering if the time to start is now?  Here are some answers to frequently asked questions to help you confidently take the next step.</p>

<ul>
	<li>
		<span style="color: #5D1725;"><b>Do you accept transfer credit?</b></span><br/>
		Yes, you may transfer up to 12 hours from an accredited university. Visit the <a href="http://catalog.msstate.edu/graduate/colleges-degree-programs/engineering/industrial-systems/">graduate catalog</a> for more details. A formal <a href="https://www.grad.msstate.edu/students/forms">transfer approval</a> form must be submitted to receive credit.<br/><br/>
	</li>
	<li>
		<span style="color: #5D1725;"><b>Does this program have different concentration options?</b></span><br/>
		Yes, this program has 5 concentrations. These concentrations are:
		<ul>
			<li>Human Factors & Ergonomics</li>
			<li>Industrial Systems</li>
			<li>Management Systems Engineering</li>
			<li>Manufacturing Systems</li>
			<li>Operations Research</li>
		</ul><br/>
	</li>
	<li>
		<span style="color: #5D1725;"><b>Does this program have a non-thesis and thesis option?</b></span><br/>
		Yes, this program offers thesis and non-thesis options to students.<br/><br/>
	</li>
	<li>
		<span style="color: #5D1725;"><b>Can the entire program be completed online?</b></span><br/>
		Yes, the coursework can be completely 100% online.
	</li>
</ul>

<p>If you have other questions or if we can assist you in any way, please contact us. We're ready to help.</p>
<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.dknox_swann')
@endsection

@section('apply')
	@include('common.apply')
@endsection