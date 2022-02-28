@extends('layouts.mjml')

@section('content')
<h3>Day 3 - Subject: If you have questions, we have answers!</h3>

<p>Dear @@{{First}},</p>

<p>Wondering if the time to start is now?  Here are some answers to frequently asked questions to help you confidently take the next step.</p>

<ul>
	<li>
		<span style="color: #5D1725;"><b>Do you accept transfer credit?</b></span><br/>
		Yes, you may transfer up to 12 hours from an accredited university upon your major professor's approval. A formal <a href="https://www.grad.msstate.edu/students/forms">transfer approval</a> form must be submitted to receive credit.<br/><br/>
	</li>
	<li>
		<span style="color: #5D1725;"><b>What are the prerequisites for this program?</b></span><br/>
		Students interested in this program must either have a Bachelor of Science in Mechanical Engineering or a Bachelor of Science degree in engineering with an undergraduate foundation in solid mechanics and thermal sciences or a Bachelor of Science degree in science and must demonstrate the mastery of content of the undergraduate ME program courses up through the senior courses in mechanical systems design and energy systems design.<br/><br/>
	</li>
	<li>
		<span style="color: #5D1725;"><b>Is there a thesis and non-thesis option for this program?</b></span><br/>
		Yes. The thesis option consists of 24 hours of coursework, 1 hour of graduate seminar and 6 hours of thesis research.  The non-thesis option consists of 30 hours of coursework and 1 hour of graduate seminar.<br/><br/>
	</li>
	<li>
		<span style="color: #5D1725;"><b>Can the entire program be completed online?</b></span><br/>
		Yes, the coursework can be completed 100% online.<br/><br/>
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