@extends('layouts.mjml')

@section('content')
<h3>Day 7 - Subject: If you have questions, we have answers!</h3>

<p>Dear @@{{First}},</p>

<p>Wondering if the time to start is now?  Here are some answers to frequently asked questions to help you confidently take the next step.</p>

<ol>
    <li>
        <span style="color: #5D1725;"><b>Is this program offered completely online?</b></span><br/>
        Yes, this program is offered completely online and does not require any face-to-face time at MSU's main campus in Starkville, MS.<br/><br/>
    </li>
    <li>
        <span style="color: #5D1725;"><b>Is the GRE required?  Can it be waived?</b></span><br/>
        The academic department requires that you take the GRE.  This requirement cannot be waived.<br/><br/>
    </li>
    <li>
        <span style="color: #5D1725;"><b>Are there any prerequisites?  Do I have to have the prerequisites completed prior to admission?</b></span><br/>
        There are no required prerequisite courses. The program is designed to take students from an initial orientation to current concepts in the profession through program development, implementation, and evaluation.<br/><br/>
    </li>
    <li>
        <span style="color: #5D1725;"><b>What is the cost of this program?</b></span><br/>
        All online students are charged the in-state graduate tuition rate plus fees.  Tuition typically increases each fall semester.  Please refer to the <a href="https://www.controller.msstate.edu/accountservices/tuition/">"Tuition and Required Fees"</a> on the Distance Education tab for current tuition rates.
    </li>
</ol>

<p>Please let me know if I can assist you in any way.</p>
<p>Thank you,</p>
@endsection

@section('signature')
	@include('signatures.dknox')
@endsection

@section('apply')
	@include('common.apply')
@endsection