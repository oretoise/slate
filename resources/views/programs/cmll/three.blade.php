@extends('layouts.mjml')

@section('content')
<h3>Day 3 - Subject: Online Master's in Foreign Languages Program</h3>
<p>Dear @@{{First}},</p>

<p>The Master of Arts in Foreign Languages  can be completed in as little as two years (taking two courses per semester). For information pertaining to finances, admissions, course framework, and course information, access our <a href="https://online.msstate.edu/cmll/">website</a>.</p>
<p>All coursework, including exams, are submitted online.  Instructional methods utilized:</p>
<ul>
	<li>Video lectures</li>
	<li>Chat rooms</li>
	<li>Bulletin boards</li>
</ul>

<p>Want to see the courses you would be taking? Check out the <a href="https://online.msstate.edu/cmll/course-descriptions/">Course Descriptions</a>. Ready to take those courses? Apply today by visiting <a href="https://apply.msstate.edu">apply.msstate.edu</a>!
<p>Please let me know if I can answer any questions you may have. I’m happy to help!</p>
@endsection

@section('signature')
	@include('signatures.jbailey')
@endsection

@section('apply')
	@include('common.apply')
@endsection