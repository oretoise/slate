@extends('layouts.mjml')

@section('content')
<h3>Day 3 - Subject: Requirements for the Vision Specialist Certificate</h3>

<p>Dear @@{{First}},</p>
<p>If you want to enhance your training as a vocational rehabilitation counselor, vocational rehabilitation therapist, or student in a graduate program in rehabilitation counseling, this certificate program is for you!<p>
<p>Below are the requirements and qualifications for the Vision Specialist Certificate:</p>

<img class="img-right" src="https://goto.msstate.edu/www/images/Distance/programs/vision/vision_1.png" />
<ol>
    <li>Current employment as a vocational rehabilitation counselor or therapist in an agency serving persons who are blind or visually impaired, OR current enrollment in a master's rehabilitation counseling degree program.</li>
    <li>Willingness to sign an agreement to be employed in a public rehabilitation agency for the required time period.</li>
    <li>Completion of an introductory course in Vocational Rehabilitation Counseling OR at least one year of experience in vocational rehabilitation counseling.</li>
    <li>Ability to complete all four courses during one continuous time period.</li>
    <li>Complete and return the Statement of <a href="https://online.msstate.edu/vision/statement-of-interest/">Interest Form</a> - Available on our site from June 1 through October 1.</li>
    <li>Submit a letter indicating why you are interested in the program.</li>
    <li>Submit two letters of recommendation.</li>
    <li>Submit an official hard copy of undergraduate and graduate academic transcript(s).</li>
</ol>

<p>Ready to <a href="https://online.msstate.edu/vision/admissions-process/">apply</a>? I'll be happy to assist you or answer any questions.</p>
<p>Thanks,</p>
@endsection

@section('signature')
	@include('signatures.sclardy')
@endsection

@section('apply')
	@include('common.apply')
@endsection