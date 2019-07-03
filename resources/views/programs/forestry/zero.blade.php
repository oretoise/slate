@extends('layouts.responsive')

@section('content')
<h3>Day 0 - Subject: Thank you for your interest in the Forestry program!</h3>

<p>Dear @{{First}},</p>

<p>Thank you for your interest in the online Master of Science in Forestry at Mississippi State University.  This degree focuses on economics, policy, and law as they relate to forestry operations.</p>

<p>Because MSU is accredited by the Southern Association of Colleges and Schools Commission on Colleges (SACSCOC), your courses will meet the same standards as on-campus courses.  Also, your online degree will not be differentiated from an on-campus degree.</p>

<p>I will follow up with any questions you had in your request for information query shortly.  In the meantime, please view our <a href="https://online.msstate.edu/pdf/slate/Forestry.pdf">program brochure</a> detailing admission requirements, prerequisites, and program curriculum.</p>

<p>Let me know if you have any questions. I'm happy to help!</p>
@endsection

@section('signature')
	@include('signatures.dknox')
@endsection

@section('apply')
	@include('common.apply')
@endsection