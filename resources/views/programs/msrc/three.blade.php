@extends('layouts.mjml')

@section('content')
<h3>Day 3 - Subject: Subject: If you have questions, we have answers!</h3>
<p>Dear @@{{First}},</p>

<p>Wondering if the time is now to start the Master of Science in Counselor Education with a concentration in Rehabilitation Counseling? Here are a few answers to frequently asked questions to help you confidently take the next step.</p>

<ol>
	<li><b>Is this program offered completed online?</b><br>
	Yes, the MS Rehabilitation Counseling program is entirely online.</li>

	<li><b>What are the program objectives?</b><br>
	<ul>
	<li>Students will demonstrate the ability to practice the profession of rehabilitation counseling legally and ethically and show understanding of the history, philosophy, and structure of the rehabilitation delivery systems in the United States.</li>
	<li>Program graduates shall satisfactorily practice rehabilitation counseling with individuals and groups.</li>
	<li>Program graduates shall satisfactorily practice rehabilitation counseling in rehabilitation planning and case management.</li>
	<li>Program graduates shall satisfactorily practice rehabilitation counseling by using vocational and career development knowledge.</li>
	<li>Program graduates shall satisfactorily practice rehabilitation counseling by identifying and utilizing assessment information.</li>
	<li>Program graduates shall satisfactorily practice rehabilitation counseling in job development, placement, and job retention.</li>
	</ul></li>

	<li><b>Do you accept transfer credit?</b><br>
	Yes, up to 12 hours can be transferred to a student's program of study from an accredited institution. The decision to grant transfer credit is made by the program advisor <a href="https://www.cep.msstate.edu/directory/zahonle">Dr. Zaccheus J. Ahonle</a> and the student’s graduate committee.</li>
</ol>

<p>The earlier you submit your application, the better chance you have of getting accepted into the program; once we have filled all available student slots, we cannot admit any more students. </p>
<p>If you have any other questions or if I can assist you in any way, don't hesitate to get in touch with me. I'm happy to help!</p>
@endsection

@section('signature')
	@include('signatures.arijal')
@endsection

@section('apply')
	@include('common.apply')
@endsection