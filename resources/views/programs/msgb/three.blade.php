@extends('layouts.mjml')

@section('content')
<h3>Day 3 - Subject: Online Master's in General Biology Program</h3>

<p>Dear @@{{First}},</p>

<img class="img-right" src="https://goto.msstate.edu/www/images/Distance/programs/msgb/msgb_1.png"/>

<p>The Master of Science in General Biology is also known as the Teachers in Biology program and can be completed in as little as two years (taking two courses per semester).</p>

<p>For information pertaining to finances, admissions, course framework, and course information, see the <a href="https://online.msstate.edu/files/pdf/Master-of-Science-General-Biologypdf.pdf">fast facts flyer</a>.</p>

<p>The general biology degree is designed for high school teachers and for those who combine biology with subjects such as ecology, microbiology, evolutionary biology, and biotechnology.</p>

<p>All coursework, including exams, are submitted online.  Instructional methods utilized:</p>

<ul>
    <li>Video lectures</li>
    <li>Chat rooms</li>
    <li>Bulletin boards</li>
</ul>

<p>Students must also attend the final 10-day capstone course, which is held on the MSU campus in Starkville, MS. During the capstone course, all students will take a proctored, written, comprehensive exam.</p>

<p>Visit our <a href="https://online.msstate.edu/msgb/#courses">website</a> to see the types of courses that are available through the MSGB program.</p>

<p>Please let me know if I can answer any questions you may have. I'm happy to help!</p>

<p>Sincerely,</p>
@endsection

@section('signature')
	@include('signatures.jbailey')
@endsection

@section('apply')
	@include('common.apply')
@endsection