@extends('layouts.mjml')

@section('content')
<h3>Day 7 - Subject: If you have questions, we have answers!</h3>

<p>Dear @@{{First}},</p>

<p>Wondering if the time to start is now?  Here are some answers to frequently asked questions to help you confidently take the next step.</p>

<p><b><u>*Please note</u></b>:  This program is NOT designed to provide the skills for a person to become a practicing, "on-the-ground" field forester who manages the forest land base.  That will require the coursework of an undergraduate Forestry degree.</p>

<ul>
    <li>
        <b>What semesters do we admit new students to the program?</b><br/>
        Students may apply for fall or spring admission in the Forestry program.
    </li><br/>
    <li>
        <b>Do we require a GMAT or GRE score?</b><br/>
        No.
    </li><br/>
    <li>
        <b>What sort of background do I need?</b><br/>
        We require you to have an undergraduate degree in Business, Economics, Management, or Forestry in order to be considered for the program.
    </li><br/>
    <li>
        <b>What if my undergraduate degree is not in one of these fields, but I'd like to discuss my eligibility for admission?</b><br/>
        We are happy to discuss the program with you.  Please be prepared to send transcripts of your academic coursework for review.
    </li><br/>
    <li>
        <b>What courses are required for this program?</b><br/>
        Please see our list of the <a href="https://online.msstate.edu/forestry#program-structure">program structure</a> and <a href="https://online.msstate.edu/forestry/#courses">course descriptions</a>.
    </li>
</ul>

<p>Please let me know if you have any additional questions.  I'm happy to help!</p>
<p>Thank you,</p>
@endsection

@section('signature')
	@include('signatures.dknox')
@endsection

@section('apply')
	@include('common.apply')
@endsection