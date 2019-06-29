@extends('layouts.responsive')

@section('content')
<h3>Day 5 - Subject: If you have questions, we have answers!</h3>
<p>Dear @{{First}},</p>

<p>Wondering is the time to start is now?  Here are some answers to frequently asked question to help you confidently take the next step.</p>

<ol>
    <li>
        <b><span style="color: #660000;">Is this program offered completely online?</span></b><br/>
        All Environmental Geosciences program courses are taught online with the exception of the final capstone course. Students choose between two capstone courses:

        <ul>
            <li>GR 8410 Field Methods Seminar, which is an 8-10 day field-based course at locations around the U.S.</li>
            <li>GR 8573 Research in Applied Meteorology, which is a 4-5 day on-campus course held in Starkville, MS.</li>
        </ul>
    </li><br/>
    <li>
        <b><span style="color: #660000;">How long does it take to complete the program?</span></b><br/>
        The program can be completed in as little as two years by taking two courses per semester.  Fall admission is preferred, but spring and summer applicants will be considered. The fall deadline is <b>August 1st</b>.
    </li><br/>
    <li>
        <b><span style="color: #660000;">Are there prerequisites to be considered for admission?</span></b><br/>
        To be considered for admission, students should have completed an Earth Science and Weather Climate course or equivalents.
    </li>
</ol>

<p>For more frequently asked questions about the program, admissions, or student services, check out our <a href="http://online.msstate.edu/geosciences/tig/faq">FAQ page</a>.</p>

<p>Also, you can contact me if you have any questions. I'm happy to help!</p>
<p>Sincerely,</p>
@endsection

@section('signature')
	@include('signatures.jbailey')
@endsection

@section('apply')
	@include('common.apply')
@endsection