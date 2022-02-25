@extends('layouts.mjml')

@section('content')
<h3>Day 3 - Subject: Online Graduate General Biology Certificate</h3>

<p>Dear @@{{First}},</p>

<img class="img-right" src="https://goto.msstate.edu/www/images/Distance/programs/msgb/msgb_1.png" />

<p>The General Biology Certificate program can be completed in as little as one year (taking two courses per semester). For information pertaining to finances, admissions, course framework, and course information, see the <a href="https://online.msstate.edu/biology/">website</a>.</p>

<p>The general biology degree is designed for high school teachers wanting to teach dual credit courses and for those who would like to teach general biology course at the community college level.  The program includes subjects such as ecology, microbiology, evolutionary biology, and biotechnology.</p>

<p>All coursework, including exams, are submitted online.  Instructional methods utilized:
	<ul>
		<li>Video lectures</li>
		<li>Chat rooms</li>
		<li>Bulletin boards</li>
		<li>Online proctoring</li>
	</ul>
</p>

<p>Access the <a href="https://online.msstate.edu/biology#program-structure">program structure</a> on the website to see the types of courses that are available through the General Biology Certificate program.</p>
<p>Please let me know if I can answer any questions you may have. I'm happy to help!</p>
@endsection

@section('signature')
	@include('signatures.jbailey')
@endsection

@section('apply')
	@include('common.apply')
@endsection