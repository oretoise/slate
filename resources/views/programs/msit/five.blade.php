@extends('layouts.mjml')

@section('content')
<h3>Day 5 - Subject: Common Questions about the MSIT Degree</h3>
<p>Dear @@{{First}},</p>

<p>Wondering if the time to start the MS in Instructional Technology is now? Here are some answers to frequently asked questions to help you confidently take the next step.</p>

<ol>
    <li>
        <b><span style="color: #5D1725;">How many hours are required to complete the program?</span></b><br/>
        A student must have acquired a minimum of 33 hours in order to graduate in both thesis and non-thesis options.
    </li><br/>
    <li>
        <b><span style="color: #5D1725;">What is the structure of the program?</span></b>
        <ul>
            <li>There are 15 hours of required courses.</li>
            <li>You'll take 12 hours in your preference from the three concentrations we offer:  Instructional Design, Distance Education, or Multimedia.</li>
            <li>You will get the opportunity to develop a professional portfolio that documents your mastery of key skills from your courses.</li>
            <li>If you choose the non-thesis route, you'll take 6 hours of electives.  The thesis route requires 6 hours.</li>
            <li>You’ll wrap up your degree with a comprehensive exam to show off what you’ve learned.</li>
        </ul>
    </li><br/>
    <li>
        <b><span style="color: #5D1725;">When can I get started with the application process?</span></b><br/>
        You can start any semester.  Application deadlines for admission:
        <ul>
            <li>Fall:  July 1</li>
            <li>Spring: November 1</li>
            <li>Summer:  April 1</li>
        </ul>
    </li>
</ol>

<p>Do you have additional questions? I'll be glad to answer any that you may have about the MSIT degree.</p>

<p>Sincerely,</p>
@endsection

@section('signature')
	@include('signatures.sclardy')
@endsection

@section('apply')
	@include('common.apply')
@endsection