@extends('layouts.mjml')

@section('content')
<h3>Day 3 - Subject: Why should you complete a bachelor’s degree?</h3>
<p>Dear @@{{First}},</p>

<p>At Mississippi State University, we are excited to offer the Bachelor of Science in Electrical Engineering. This degree is offered completely online!</p>
<p>Because MSU is accredited by the Southern Association of Colleges and Schools Commission on Colleges (SACSCOC), your courses will meet the same standards as on-campus courses. Also, your online degree will not be differentiated from an on-campus degree.</p>
<p>If you are interested in a program that has a foundation based on the principles of the electrical and physical sciences and uses mathematics as a common language to facilitate the solution of engineering problems. The core curriculum consists of a sequence of courses in digital devices, circuits and electronics, electromagnetic field theory, and modern energy conversion.</p>
<p>If you have questions, please ask. I am happy to help!</p>
@endsection

@section('signature')
	@include('signatures.dknox')
@endsection

@section('apply')
	@include('common.apply')
@endsection