@extends('layouts.mjml')

@section('content')
<h3>Day 0 - Subject: Thank you for checking out MSU's online Elementary Education program!</h3>
<p>Dear @@{{First}},</p>

<p>
	<img class="img-right" src="https://goto.msstate.edu/www/images/Distance/elem/elem1.png" />
	Thank you for checking out the online Bachelor of Science in Elementary Education (ELEM) degree program at Mississippi State University (MSU)!  This program is designed to prepare you to have the essential foundations for instructing children in preK-6th grade.
</p>

<p><b>How does the distance ELEM degree program work?</b></p>
<ul>
	<li><b>In-state tuition for all students.</b></li>
	<li>123 hours are required to complete the program.</li>
	<li>Completely online.</li>
	<li>Start the teacher education program in the fall or spring semester.</li>
	<li>If you have core classes to take, you can start those in the summer.</li>
	<li>Two concentrations are available for our ELEM curriculum: 1) Early Childhood and 2) Middle School.</li>
	<li>You can transfer up to 61 hours from accredited community colleges or an accredited 4-year institution. When you apply, the Registrar's Office will review your transcript(s) to confirm which classes will transfer.</li>
</ul>

<p>Check out the courses in the program on <a href="https://online.msstate.edu/elem#program-structure">our website</a>.</p>

<p>
	If you would like your transcripts evaluated before applying, please send an unofficial transcript of all your college course work to <a href="mailto:elemonline@colled.msstate.edu">elemonline@colled.msstate.edu</a>.
</p>

<p>Because MSU is accredited by the Southern Association of Colleges and Schools Commission on Colleges (SACSCOC) and the Association to Advance Collegiate Schools of Business, your courses will meet the same standards as on-campus courses.  Also, your online degree will not be differentiated from an on-campus degree.</p>

<p>
	<b>**We are no longer able to place students in Georgia for an internship. Residents living in the state of Georgia will not be eligible to teach in Georgia.**</b>
</p>

<p>Ready to apply? I'll be happy to assist you or answer any questions.</p>

<p>Thanks,</p>
@endsection

@section('signature')
	@include('signatures.arijal')
@endsection

@section('apply')
	@include('common.apply')
@endsection