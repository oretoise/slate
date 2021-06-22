@extends('layouts.mjml')

@section('content')
<h3>Day 9 - Subject: Are you Ready to “MBA…Your Way?”</h3>
<p>Dear @@{{First}},</p>

<p>
  The “MBA, Your Way” with Mississippi State Online awaits YOU!<br />
  <br />
  Taking the GMAT was a major step toward pursuing your graduate studies. Take the next step with us by enrolling in our online MBA, TODAY!<br />
  <br />
  Our program admits three times per year: fall, spring, and summer. Your application must be submitted by the semester deadline in which you plan to enroll:
</p>

<p>
  Fall semester: <b>August 1st</b><br />
  Spring semester: <b>December 1st</b><br />
  Summer semester: <b>May 15th</b>
</p>

<p>
  And remember, I am here to assist you every step of the way, from navigating the admissions process, through your coursework, and all that leads up to graduation!
</p>

<p>
  You can download the <a href="https://online.msstate.edu/pdf/mba/MBA-Application-Checklist.pdf?cbe_email={{Email}}">application checklist</a> to ensure that you have submitted the required documents for full admission into the MBA program.
</p>

<p>
  Thank you for choosing Mississippi State for your online degree.
</p>

<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.mjimerson')
@endsection

@section('apply')
	@include('common.apply')
@endsection