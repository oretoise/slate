@extends('layouts.responsive')

@section('content')
<h3>Day 0 - Subject: Thank you for checking out MSU's online Meteorology program!</h3>
<p>Dear @{{First}},</p>

<p>Thank you for checking out MSU's online Broadcast & Operational Meteorology program (BOMP).</p>

<p>This program is for anyone seeking to further develop skills in operational, applied meteorology. While most of our BOMP students are television or radio weathercasters, many other professionals participate in the program including:</p>

<ul>
	<li>Newspaper reporters</li>
	<li>Journalists</li>
	<li>Educators</li>
	<li>Military personnel</li>
	<li>Private sector meteorologists</li>
	<li>Storm chasers</li>
	<li>General hobbyists</li>
	<li>Individuals who need coursework to be eligible to work for National Weather Service or to receive professional certification.</li>
</ul>

<p>The course schedule for the program can be accessed on our <a href="https://online.msstate.edu/geosciences/bomp/program-structure/">website</a>.</p>
<p>Because MSU is accredited by the Southern Association of Colleges and Schools Commission on Colleges (SACSCOC) and the Association to Advance Collegiate Schools of Business, your courses will meet the same standards as on-campus courses.  Also, your online degree will not be differentiated from an on-campus degree.</p>

<p>The deadline for fall admission is 1 August.  If you have any questions, contact me any time.  I am ready to help!</p>

<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.jbailey')
@endsection

@section('apply')
	@include('common.apply')
@endsection