@extends('layouts.responsive')

@section('content')
<h3>Day 5 - Subject: If you have questions, we have answers!</h3>
<p>Dear @{{First}},</p>

<p>Wondering if the time to start the PhD in Community College Leadership (PHCL) is now? Here are some answers to frequently asked questions to help you confidently take the next step.</p>

<ol>
    <li>
        <b>Is this program offered 100% online?</b><br/>
        One course is only offered on the Mississippi State University campus in Starkville, MS, and requires you to attend three weekends in the semester (typically Friday from 5:00 PM - 9:00 PM; Saturday from 8:00 AM - 6:00 PM).  However, we may be able to work with you to find a suitable alternative, if you do not live close enough to attend an on-campus course.
    </li><br/>
    <li>
        <b>Do you accept transfer credit?</b><br/>
        Yes, your major professor and committee must approve any transfer credits. A doctoral student may transfer coursework with grades of B or higher taken at other domestic universities, international universities, or military educational programs to fulfill requirements for this program provided they meet the criteria established by the Graduate School, meet program requirements, and are academically relevant to the current program at the completion of the degree. At the doctoral level, transfer credit cannot exceed one-half of the coursework requirement.
    </li><br/>
    <li>
        <b>What are the application deadlines?</b><br/>
        <ul>
            <li>Summer and Fall semesters:   March 1</li>
            <li>Spring semester:  October 1</li>
        </ul>
    </li>
</ol>

<p>The earlier you submit your application, the better chance you have of getting the courses that you need.</p>
<p>If you have additional questions, just ask! I'm here to help!</p>
<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.vtate')
@endsection

@section('apply')
	@include('common.apply')
@endsection