@extends('layouts.mjml')

@section('content')
<h3>Day 7 - Subject: If You Have Questions, We Have Answers!</h3>

<p>Dear @@{{First}},</p>

<p>Wondering if the time to start is now?  Here are some answers to frequently asked questions to help you confidently take the next step.</p>

<ol>
    <li>
        <b>Is this program offered completely online?</b><br/>
        No, this program is not completely online.  Students are required to complete an on-campus practicum in the Student Health Center on our Starkville, MS, campus during the spring semester. Additionally, students must also complete an internship within a specified health care facility within the state of Mississippi during the summer semester.<br/><br/>
    </li>
    <li>
        <b>If I live outside of the state of Mississippi can I apply for program admission?</b><br/>
        No. At this time, program admission is only available to state of Mississippi residents.<br/><br/>
    </li>
    <li>
        <b>What days am I required to be on campus for the practicum?</b><br/>
        Every Monday, Wednesday, and Friday throughout the spring semester.<br/><br/>
    </li>
    <li>
        <b>With the on-campus requirements, am I responsible for securing my own accommodations?</b><br/>
        Yes. If you live outside the Starkville, MS, area, you are responsible for securing your lodging and transportation during these times. <a href="https://offcampushousing.msstate.edu/">MSU's Office of Off-Campus Student Services</a> is a great resource for finding rental properties near the Starkville campus. However, if you need additional assistance, please do not hesitate to contact our program <a href="https://online.msstate.edu/wellness/staff/">staff</a>.
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