@extends('layouts.responsive')

@section('content')
<h3>Day 5 - Subject: If you have questions, we have answers!</h3>

<p>Dear *|FNAME|*,</p>

<p>Wondering if the time to start is now?  Here are some answers to frequently asked questions to help you confidently take the next step.</p>

<ol>
    <li>
        <b><span style="color: #660000;">Is this program offered completely online?</span></b><br/>
        All the courses are taught online with exception of the final capstone course workshop. The capstone course is designed around a five-day workshop that is hosted at Mississippi State University in Starkville, MS, during the summer semester.<br/><br/>
    </li>
    <li>
        <b><span style="color: #660000;">How long does it take to complete the program?</span></b><br/>
        Students take two courses per semester to complete the program in two years.<br/><br/>
    </li>
    <li>
        <b><span style="color: #660000;">Are there prerequisites to be considered for admission?</span></b><br/>
        A bachelor’s degree in a natural science from a four-year educational institution that has unconditional accreditation from a regional accrediting agency and an upper level course in Synoptic Meteorology (or equivalent) is a prerequisite for beginning the program of study.  If you're not certain about the accreditation of your former university, I will be glad to help.<br/><br/>
    </li>
    <li>
        <b><span style="color: #660000;">Do you accept transfer credit?</span></b><br/>
        Due to the nature of this program, course work taken from other schools cannot be transferred into this program. However, course substitution is allowed using MSU Geosciences courses when an individual is already proficient in a specific discipline.<br/><br/>
    </li>
</ol>

<p>For more frequently asked questions about the program, admissions, or student services, visit the <a href="http://distance.msstate.edu/geosciences/amp/faq">Applied Meteorology website</a>.</p>
<p>If I can assist you in any way, please contact me.  I'm ready to help.</p>
<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.jbailey')
@endsection

@section('apply')
	@include('common.apply')
@endsection