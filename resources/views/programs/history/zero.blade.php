@extends('layouts.mjml')

@section('content')
<h3>Day 0 - Subject: Thank you for checking out MSU's online History program!</h3>

<img class="img-right" src="https://goto.msstate.edu/www/images/Distance/programs/history/history_1.png" />

<p>Dear @@{{First}},</p>

<p>Thank you for checking out MSU's online Bachelor of Arts (BA) in History degree program.</p>
<p>The BA in History degree program is designed both for students who want to complete or start their degree completely online.</p>

<p>
    <b>What can you do with a BA in History?</b><br/>
    A BA in History degree online provides critical thinking, research and writing skills that can open doors to many career opportunities, including:
</p>

<ul>
    <li>Library Fields</li>
    <li>Public History</li>
    <li>Archival Fields</li>
    <li>Museums</li>
    <li>Historical Preservation</li>
    <li>Public Policy</li>
    <li>Religious Careers</li>
    <li>Plus, the BA in History can serve as the starting point for obtaining advanced degrees in Library Science, Law, Archival Studies, and more!</li>
</ul>

<p>Check out how you can get started by reviewing our <a href="https://online.msstate.edu/history#program-structure">program curriculum</a> information.</p>

<p>Students can transfer applicable and approved coursework from accredited community colleges and/or four-year institutions into the History degree too.</p>
<p>Because MSU is accredited by the Southern Association of Colleges and Schools Commission on Colleges (SACSCOC), your courses will meet the same standards as on-campus courses. Also, your online degree will not be differentiated from an on-campus degree.</p>
<p>Are you <a href="https://online.msstate.edu/history#admissions-process">ready to apply</a>? If you have any questions or concerns, please contact us. We are ready to help.</p>
@endsection

@section('signature')
	@include('signatures.jbailey')
@endsection

@section('apply')
	@include('common.apply')
@endsection