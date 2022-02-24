@extends('layouts.mjml')

@section('content')
<h3>Day 3 - Subject: If you have questions, we have answers!</h3>

<img class="img-right" src="https://goto.msstate.edu/www/images/Distance/programs/animal/guineapig.jpg" alt="Guinea pig laying in the grass" />

<p>Dear @@{{First}},</p>

<p>Wondering if the time to start is now?  Here are some answers to frequently asked questions to help you confidently take the next step.</p>

<ol>
	<li>
		<b><span style="color: #5D1725;">Who Should apply?</span></b><br/>
		The Companion Animal Management Certificate program is an online non-degree program that gives pre-veterinary medicine students, veterinary technician students, veterinary assistants, sales professionals, shelter managers, animal caretakers, pet breeders, and pet enthusiasts the opportunity to take in-depth courses on various aspects of companion animal management. Course topics include companion animal nutrition, behavior and training, evaluation, shelter medicine and the human animal bond.<br/><br/>
	</li>
	<li>
		<b><span style="color: #5D1725;">Why choose MSU's Companion Animal Management Certificate?</span></b><br/>
		<ul>
			<li>Dedicated instructors with over 10 years' experience in veterinary medicine and industry.</li>
			<li>Certificate can be completed in 2 semesters.</li>
			<li>Career guidance with established industry partnerships</li>
			<li>Opportunities to pursue further education and degrees</li>
			<li>Personalized advising for career goals</li>
			<li>No set class hours, complete course work on your schedule.</li>
		</ul><br/>
	</li>
	<li>
		<b><span style="color: #5D1725;">Can the entire program be completed online?</span></b><br/>
		Yes, the coursework can be completed 100% online.
	</li>
</ol>

<p>If you have other questions or if I can assist you in any way, please contact me.  I'm ready to help.</p>
<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.dknox')
@endsection

@section('apply')
	@include('common.apply')
@endsection