@extends('layouts.mjml')

@section('content')
<h3>Day 7 - Subject: If you have questions, we have answers!</h3>
<p>Dear @@{{First}},</p>

<p>Wondering if the time to start is now?  Here are some answers to frequently asked questions to help you confidently take the next step toward your online Bachelor of Science in Industrial Technology (INDT).</p>

<ul>
	<li>
		<span style="color: #800000;"><b>Is this program offered completed online?</b></span><br/>
		No, this program is not completely online.  Some courses require students to participate in on-campus workshops, which will be held on our Starkville, MS, campus during four Saturdays in the semester.  Courses with an on-campus workshop are denoted with an asterisk (*) in the <a href="https://online.msstate.edu/bsindt#program-structure">Program Structure</a>.<br/><br/>
	</li>
	<li>
		<span style="color: #800000;"><b>Do you accept transfer credit?</b></span><br/>
		Yes, you may transfer up to 62 hours from an accredited community college or accredited four-year university.  When you apply, the Registrar's Office will review your transcript(s) to confirm which classes will transfer.<br/><br/>
	</li>
	<li>
		<span style="color: #800000;"><b>What are some of the possible job titles one may receive with this degree?</b></span><br/>
		Possible job titles range from Production Supervisor to Engineer Specialist.  For more options and potential employers, visit the <a href="https://online.msstate.edu/bsindt#career-outlook">Career Outlook</a>.
	</li>
</ul>

<p>If you have other questions or if I can assist you in any way, please contact me. I'm ready to help.</p>
<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.sclardy')
@endsection

@section('apply')
	@include('common.apply')
@endsection