@extends('layouts.mjml')

@section('content')
<h3>Day 0 - Subject: Thank you for checking out MSU's online BBA program!</h3>
<p>Dear @@{{First}},</p>
<p>
    <img class="img-right" src="https://goto.msstate.edu/www/images/Distance/bba/Student_Computer_B4W5425.jpg"/>
    Thank you for checking out MSU's online Bachelor of Business Administration (BBA) degree.
</p>

<p>This degree requires 123 credit hours, preparing you for a career in corporate America or the world of non-profits with courses in marketing, finance and management taught by award-winning faculty.</p>

<p>
    See how you can get started by
    <ul>
        <li>Reviewing our <a href="https://online.msstate.edu/bba/program-structure/">program curriculum information</a></li>
        <li>Requesting a free transcript evaluation</li>
    </ul>
</p>

<p>Because MSU is accredited by the Southern Association of Colleges and Schools Commission on Colleges (SACSCOC) and the Association to Advance Collegiate Schools of Business, your courses will meet the same standards as on-campus courses.  Also, your online degree will not be differentiated from an on-campus degree.</p>

<p>Are you <a href="https://online.msstate.edu/bba/admissions-process">ready to apply</a>? If you have any questions or concerns, contact me any time.</p>

<p>All the best,</p>
@endsection

@section('signature')
    @include('signatures.cpilgrim')
@endsection

@section('apply')
    @include('common.apply')
@endsection
