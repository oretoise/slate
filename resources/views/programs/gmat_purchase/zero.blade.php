@extends('layouts.mjml')

@section('content')
<h3>Day 0 - Subject: “MBA…Your Way” with Mississippi State Online</h3>
<p>Dear @@{{First}},</p>

<p>
Mississippi State Online would like to congratulate you on completing the GMAT exam! We commend your commitment, dedication, and motivation to pursue graduate study.<br />
<br />
Mississippi State University's College of Business offers an accredited, flexible, and affordable online MBA degree to students around the world.
</p>

<p>
Our emphasis is on quality students, quality professors and quality education. For this reason,
</p>

<ul>
<li>
    <i>U.S. News and World Report</i> ranks us among the Best Online Business Programs.
</li>
<li>
    <a href="http://geteducated.com/">GetEducated.com</a> designates us as a "Best Buy" AACSB Accredited Online MBA.
</li>
<li>
    <i>Military Times</i> considers us among the "Best for Vets" Colleges.
</li>
</ul>

<p>
Program Highlights:
</p>

<ul>
<li>
    AACSB accredited program, the most elite accreditation for business schools
</li>
<li>
    30-credit hours to complete the general program, 33-credit hours for project management concentration
</li>
<li>
    100% Online
</li>
<li>
    Start any semester
</li>
<li>
    All students pay in-state tuition
</li>
<li>
    Designated advisor and program coordinator to assist you throughout your academic career.
</li>
</ul>

<p>
Because MSU is accredited by the Southern Association of Colleges and Schools Commission on Colleges (SACSCOC) and the Association to Advance Collegiate Schools of Business, your courses will meet the same standards as on-campus courses. Also, your online degree will not be differentiated from an on-campus degree.
</p>

<p>
Please view our program <a href="https://online.msstate.edu/files/pdf/MBAFlyer.pdf">fast-facts flyer</a>, detailing program admission requirements, prerequisite information, and program curriculum. I'm happy to answer any questions you may have.
</p>

<p>I look forward to working with you!</p>
@endsection

@section('signature')
	@include('signatures.mjimerson')
@endsection

@section('apply')
	@include('common.apply')
@endsection