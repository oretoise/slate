@extends('layouts.mjml')

@section('content')
<h3>Day 0 - Subject: Thank you for checking out MSU's online BS Educational Psychology program!</h3>
<p>Dear @@{{First}},</p>
<p>Thank you for checking om the online Bachelor of Science in Educational Psychology (BS EPY) degree program at Mississippi State University (MSU)!  The program is designed for people who enjoy helping and working with others. It offers enriching courses in human growth and development, human learning, measurement, personality theory, exceptional populations, research methods, and psychology.</p>
<p><b>How does the distance BS EPY degree program work?</b></p>
<ul>
	<li>In-state tuition for all students.</li>
	<li>124 hours are required to complete the program.</li>
	<li>Completely online.</li>
	<li>Start the BS EPY program in the fall or spring semester.</li>
	<li>If you have core classes to take, you can start those in the summer.</li>
	<li>You can transfer up to 62 hours from accredited community colleges or an accredited 4-year institution. When you apply, the Registrar's Office will review your transcript(s) to confirm which classes will transfer.</li>
</ul>

<p>To see the types of courses that are affiliated with the program, please visit our <a href="https://online.msstate.edu/epy#program-structure">website</a>.</p>
<p>Because MSU is accredited by the Southern Association of Colleges and Schools Commission on Colleges (SACSCOC) and the Association to Advance Collegiate Schools of Business, your classes will meet the same standards as those on campus.  Also, your online degree will not be differentiated from an on-campus degree.</p>
<p>Ready to apply? I'll be happy to assist you or answer any questions.</p>
@endsection

@section('signature')
	@include('signatures.arijal')
@endsection

@section('apply')
	@include('common.apply')
@endsection