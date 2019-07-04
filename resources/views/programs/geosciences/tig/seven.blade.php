@extends('layouts.responsive')

@section('content')
<h3>Day 7 - Subject: Environmental Geosciences Program Information</h3>

<p>Dear @{{First}},</p>

<img class="img-right" src="https://goto.msstate.edu/www/images/Distance/programs/geosciences/tig_2.png" />

<p>Want hands-on geosciences experience? Earn your master's degree online from MSU.</p>

<ul>
    <li>Complete in as little as two years.</li>
    <li>Only 30 credit hours are required.</li>
    <li>Content areas include meteorology, climatology, astronomy, GIS, and more.</li>
    <li>Choose your capstone course from two options.</li>
</ul>

<p>The entire two-year degree is completed online except the last capstone course.  For the capstone course, students choose between the following:</p>

<ul>
    <li>Field Methods Seminar:  an 8-10 day field course offered at several destinations, such as Western Washington, the Great Plains, Upstate New York, and the Bahamas.</li>
    <li>Research in Applied Meteorology: a 4-5 day seminar course hosted on the MSU campus in Starkville, MS.</li>
</ul>

<p>For the other nine courses in the Environmental Geosciences program, all coursework, including exams, are completed online. Lectures, chat rooms, and bulletin boards are available for each course.  Upon completion of the program, a written, comprehensive exam is required.</p>

<p>For information pertaining to finances, admissions, and course framework, see our <a href="https://online.msstate.edu/pdf/slate/Master-of-Science-Teachers-Geosciences.pdf">flyer</a>.</p>

<p>Please let me know if you have any questions. I'm happy to help!</p>
<p>Thanks,</p>
@endsection

@section('signature')
	@include('signatures.jbailey')
@endsection

@section('apply')
	@include('common.apply')
@endsection