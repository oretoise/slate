@extends('layouts.mjml')

@section('content')
<h3>Day 3 - Subject: Interested in pursuing an online degree in Health Promotion?</h3>

<p>Dear @@{{First}},</p>

<img class="img-right" src="https://goto.msstate.edu/www/images/Distance/programs/fnh/health_1.png" />

<p>Health Promotion is one of the fastest growing areas of employment in the United States.</p>

<p><b>Program Highlights:</b></p>
<ul>
    <li>In-state tuition for all students</li>
    <li>100% online</li>
    <li>33 hours to complete</li>
    <li>Thesis and non-thesis options available</li>
    <li>Coursework developed around competencies required to become a Certified Health Education Specialist (CHES)</li>
</ul>

<p>Because MSU is accredited by the Southern Association of Colleges and Schools Commission on Colleges (SACSCOC), your courses will meet the same standards as on-campus courses.  Also, your online degree will not be differentiated from an on-campus degree.</p>

<p>If you're interested in developing or improving your skills in the delivery, implementation, and evaluation of behavior change and other health promotion interventions, then you could benefit from the Health Promotion degree.</p>
<p>Let me know if you have any questions.</p>
<p>Thank you,</p>
@endsection

@section('signature')
	@include('signatures.dknox')
@endsection

@section('apply')
	@include('common.apply')
@endsection