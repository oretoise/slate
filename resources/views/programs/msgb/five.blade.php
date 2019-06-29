@extends('layouts.responsive')

@section('content')
<h3>Day 5 - Subject: If you have questions, we have answers!</h3>
<p>Dear @{{First}},</p>

<p>In hopes to help you the best that I can, I wanted to provide you with some answers below to some of the most frequently asked questions, regarding the program.</p>

<ol>
    <li>
        <b><span style="color: #660000;">Is this program offered completely online?</span></b><br/>
        All the General Biology courses are taught online with the exception of the final capstone course. The capstone course is designed around a 10-day workshop that is hosted at Mississippi State University in Starkville, MS, during the summer.
    </li><br/>
    <li>
        <b><span style="color: #660000;">How long does it take to complete the program?</span></b><br/>
        The degree can be completed in as little as two years by taking two courses per semester.
    </li><br/>
    <li>
        <b><span style="color: #660000;">Are there prerequisites to be considered for admission?</span></b><br/>
        A minimum of 15 hours in Biology from an accredited university is preferred, with at least a "B" grade and an overall GPA of at least 2.75.
    </li>
</ol>

<p>For more frequently asked questions about the program, admissions, or student services, visit the <a href="http://online.msstate.edu/msgb/faq">General Biology FAQ</a>.</p>
<p>Let me know if you have any questions. I'm happy to help!</p>
<p>Sincerely,</p>
@endsection

@section('signature')
	@include('signatures.jbailey')
@endsection

@section('apply')
	@include('common.apply')
@endsection