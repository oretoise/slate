@extends('layouts.mjml')

@section('content')
<h3>Day 3 - Subject: If you have questions, we have answers!</h3>
<p>Dear @@{{First}},</p>

<p>Wondering if the time to start is now?  Here are some answers to frequently asked questions to help you confidently take the next step.</p>

<ul>
	<li>
		<span style="color: #5D1725;"><b>Who Should apply?</b></span><br/>
		The Conservation Education non-thesis master’s program prepares you to become a leader in the field of conservation education. The program is designed both for full and part-time students who are interested in enhancing conservation-focused educational, scientific, and leadership skills.<br/><br/>
	</li>
	<li>
		<span style="color: #5D1725;"><b>Why choose MSU’s Conservation Education program?</b></span><br/>
		<b>Mississippi State Online’s non-thesis master’s degree in Conservation Education gives you the opportunity to:</b><br/>
		<ul>
			<li>Complete the only Conservation Education program in the United States that is 100% online with a focus on advancing leaders in conservation education.</li>
			<li>This program was designed by our faculty to meet accreditation and industry standards.  The conservation education faculty are scientific researchers with experience in both non-formal and formal educational settings.</li>
			<li>Work and take classes. Designed for the working professional, our classes are fully online with weekly tasks assigned for you to complete on your schedule.</li>
		</ul>
		<br/>
	</li>
	<li>
		<span style="color: #5D1725;"><b>Can the entire program be completed online?</b></span><br/>
		Yes, the coursework can be completed 100% online. This program is asynchronous and requires a minimum of 30 credit hours for completion.
	</li>
</ul>

<p>If you have other questions or if we can assist you in any way, please contact us.  We are ready to help.</p>
<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.dknox_hines')
@endsection

@section('apply')
	@include('common.apply')
@endsection