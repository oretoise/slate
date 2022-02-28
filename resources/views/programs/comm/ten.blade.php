@extends('layouts.mjml')

@section('content')
<h3>Day 10 - Subject: Start your application today!</h3>
<a href="https://www.youtube.com/watch?v=pGOHF0SnnfE"><img class="img-right" src="https://goto.msstate.edu/www/images/Distance/Email%20Template/undergrad_admissions_video.png"/></a>
<p>Dear @@{{First}},</p>
<p>Start your application for the online Communication degree program.</p>

<p><b><span style="color: #800000;">New Admissions</span></b></p>

<p>If you have never attended Mississippi State University, please complete the online <a href="http://www.apply.msstate.edu/">Undergraduate Admissions Application</a>.
<ul>
	<li>You will choose <b>Communication (BA)</b> as your major and <b>Online Education</b> as your campus.</li>
	<li>Request that official ACT or SAT scores be sent to MSU.</li>
	<li>Request that your high school send your official transcript. Faxed transcripts will not be accepted.</li>
	<li>Submit a separate official final transcript from each college or university attended; faxed transcripts will not be accepted. An applicant may not ignore previous college attendance and must list all colleges attended on the application for admission. You must be in good standing at the last college or university attended.</li>
	<li>If you are able to submit official transcripts and other documentation electronically, have them sent to <a href="mailto:admit@msstate.edu.">admit@msstate.edu</a>.</li>
	<li>If you are unable to submit official transcripts and other documentation electronically, you may send them via U.S. Postal Service to:<br/>
	<i><b>Office of Admissions & ScholarshipsM</b><br/>
	P.O. Box 6334<br/>
	Mississippi State, MS 39762</i></li>
	<li>All new admits will pay a non-refundable application fee online.</li>
</ul>
<hr>
<p><b><span style="color: #800000">Readmissions</span></b></p>
<p>If you have previously attended MSU, you will need to apply for <a href="http://www.apply.msstate.edu/">Readmission</a>.</p>
<ul>
	<li>Once you are readmitted, if you are not a former Communication BA student, please contact your advisor so he or she may change your major and campus as well as advise you for the upcoming semester.</li>
	<li>Submit a separate official final transcript from each college or university attended; faxed transcripts will not be accepted. An applicant may not ignore previous college attendance and must list all colleges attended on the application for admission. You must be in good standing at the last college or university attended.</li>
	<li>If you are able to submit official transcripts and other documentation electronically, have them sent to <a href="mailto:admit@msstate.edu.">admit@msstate.edu</a>.</li>
	<li>If you are unable to submit official transcripts and other documentation electronically, you may send them via U.S. Postal Service to:<br/>
	<i><b>Office of Admissions & ScholarshipsM</b><br/>
	P.O. Box 6334<br/>
	Mississippi State, MS 39762</i></li>
	<li>All new admits will pay a non-refundable application fee online.</li>
</ul>
<p><b><span style="color: #800000">Transfer Credit</span></b></p>
<ul>
	<li>Students may transfer up to 62 hours from an accredited community college.</li>
	<li>Last 32 hours must be from Mississippi State University.</li>
	<li>Transfer students must have an average GPA of 2.0 to be admitted.</li>
	<li>Upon admission to the university, the <a href="https://www.registrar.msstate.edu/">Registrar's Office</a> will evaluate transfer credit to determine how it transfers to Mississippi State University.</li>
</ul>

<p>Remember to choose <b><span style="color: #800000;">Communication/Public Relations (BA)</span></b> as your major and <b><span style="color: #800000;">Online Education</span></b> as your campus when applying for <a href="https://online.msstate.edu/comm#admissions-process">admission or readmission</a>.</p>

<p>If you have any questions, ask. We are happy to help.</p>
<p>Thank you for considering Mississippi State for your online degree!</p>
@endsection

@section('signature')
	@include('signatures.mchancellor')
@endsection

@section('apply')
	@include('common.apply')
@endsection