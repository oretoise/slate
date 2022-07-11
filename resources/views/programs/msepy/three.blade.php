@extends('layouts.mjml')

@section('content')
<h3>Day 3 - Subject: If you have questions, we have answers!</h3>
<p>Dear @@{{First}},</p>

<p>Wondering if the time is now to start the Master of Science in Educational Psychology- Applied Behavior Analysis? Here are few answers to frequently asked questions to help you confidently take the next step.</p>

<ul>
    <li><b> Is this program offered completed online?</b> <br/>
Yes, the MS EPY program is completely online.
</li>
    <li><b> Do you accept transfer credit?</b> <br/>
Yes, up to 12 hours can be transferred to a student's program of study from an accredited institution. The decision to grant transfer credit is made by the program advisor Dr. Hallie Smith and the student’s graduate committee.
</li>
    <li><b> Do I need to have experience in behavior analysis to apply to this program?</b> <br/>
You do not! While we are excited about applicants who do have experience with behavior analysis, it is not expected or required. 
</li>
    <li><b> Can I sit for the BCBA exam after completing this program? </b> <br/>
After completing the program and graduating, you will have completed all the required coursework to make you eligible to take the BCBA exam. However, in order to sit for the BCBA exam, you will also need to have accrued all the required experience and supervision hours. While those experiences are not required and not built into the program at this time, should you choose to enroll in the practicum courses that are offered by the program OR choose to get experience and supervision hours independent of the practicum courses we offer, you may have accumulated the required experience and supervision hours to sit for the exam.
</li>
</ul>

<p>The earlier you submit your application, the better chance you have of getting accepted into the program; once we have filled all available student slots we are not able to admit any more students. </p>

<p>If you have any other question or if I can assist you in any way, please contact me. I'm happy to help!</p>

<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.arijal')
@endsection

@section('apply')
	@include('common.apply')
@endsection