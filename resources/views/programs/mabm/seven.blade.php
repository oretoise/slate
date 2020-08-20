@extends('layouts.mjml')

@section('content')
<h3>Day 7 - Subject: If you have questions, we have answers!</h3>

<p>Dear @@{{First}},</p>

<p>Wondering if the time to start is now?  Here are some answers to frequently asked questions to help you confidently take the next step.</p>

<ol>
    <li>
        <b>Since courses are offered through both the College of Agriculture and Life Science and the College of Business, will I receive a dual degree?</b><br/>
        Though courses are offered through both colleges, you will not receive a dual degree. Your degree will read Master of Agribusiness Management, College of Agriculture and Life Sciences.
    </li><br/>
    <li>
        <b>Is the GMAT or GRE required?  Can it be waived?</b><br/>
        The academic department requires that you take the GRE.  This requirement cannot be waived.
    </li><br/>
    <li>
        <b>Are there any prerequisites?  Do I have to have the prerequisites completed prior to admission?</b><br/>
        Yes, there are required prerequisite courses for the MABM program.  These courses can be completed online through Mississippi State University. The prerequisites do not have to be completed prior to admission; however, they must be taken prior to enrolling in the core program courses.
    </li><br/>
    <li>
        <b>What is the cost of this program?</b><br/>
        All online students are charged the in-state graduate tuition rate plus fees.  Tuition typically increases each fall semester.  Please refer to the <a href="https://www.controller.msstate.edu/accountservices/tuition/">"Tuition and Required Fees"</a> on the Online Education tab for current tuition rates.
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