@extends('layouts.responsive')

@section('content')
<h3>Day 3 - Subject: If you have questions, we have answers!</h3>
<p>Dear *|FNAME|*,</p>
<p>
    Wondering if the time to start is now?  Here are some answers to frequently asked questions to help you confidently take the next step.
</p>

<ul>
    <li>
        <b><span style="color: #800000;">Do you accept transfer credit?</span></b><br/>
        Yes, you may transfer up to 62 hours from an accredited community college. When you apply, the Registrar's Office will review your transcript(s) to confirm which classes will transfer.<br/><br/>
    </li>
    <li>
        <b><span style="color: #800000;">Are there additional admission requirements to be admitted to the online BBA program?</span></b><br/>
        Yes, in addition to university admission requirements, all students must meet the following minimum GPA requirements to be admitted into the BBA program:

        <br/><br/>
        <ul>
            <li>Freshmen – 2.0</li>
            <li>Sophomores – 2.25</li>
            <li>Juniors and Seniors – 2.5</li>
        </ul>
        <br/><br/>

        Students who do not meet the above minimum GPA requirement may be admitted into the university as an <span style="color: #800000;"><b>undeclared</b></span> major until the requirement is met.<br/><br/>
    </li>
    <li>
        <b><span style="color: #800000;">Can the entire program be completed online?</span></b><br/>
        With the exception of BL 2413 – Legal Environment of Business and BQA 2113 – Business Statistical Methods I, all other online BBA coursework can be completed 100% online. These courses may be completed at an accredited community college or four-year university before you become a Mississippi State Bulldog!
    </li>
</ul>

<p>If you have other questions or if I can assist you in any way, contact me any time.</p>
<p>Thanks,</p>
@endsection

@section('signature')
    @include('signatures.mjimerson')
@endsection

@section('apply')
    @include('common.apply')
@endsection
