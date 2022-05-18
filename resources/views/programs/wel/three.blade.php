@extends('layouts.mjml')

@section('content')
<h3>Day 3 - Subject: If you have questions, we have answers!</h3>
<p>Dear @@{{First}},</p>

<p>Wondering if the time to start the Master of Science in Workforce Education Leadership is now? Here are answers to frequently asked questions to help you confidently take the next step.</p>

<ol>
    <li>
        <b>Is this program offered completed online?</b><br/>
        Yes, the WEL program is completely online.
    </li><br/>
    <li>
        <b>Do you accept transfer credit?</b><br/>
        Yes, a total of 9 hours can be transferred to a student's program of study from an accredited four-year university.  Your advisor, <a href="mailto:cdleadership@colled.msstate.edu">Dr. Stephanie King</a>, will review those courses to see if they meet the program's criteria.
    </li><br/>
    <li>
        <b>What are the application deadlines?</b><br/>
        <ul>
            <li>Fall semester:  August 1</li>
            <li>Spring semester:  December 1</li>
            <li>Summer semester:  May 15</li>
        </ul>
    </li>
</ol>

<p>The earlier you submit your application, the better chance you have of getting the classes that you need.</p>

<p>If you have any other question or if I can assist you in any way, please contact me. I'm happy to help!</p>

<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.arijal')
@endsection

@section('apply')
	@include('common.apply')
@endsection