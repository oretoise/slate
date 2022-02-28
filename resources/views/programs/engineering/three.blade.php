    @extends('layouts.mjml')

@section('content')
<h3>Day 3 - Subject: If you have questions, we have answers!</h3>

<p>Dear @@{{First}},</p>
<p>Wondering if the time to start is now?  Here are some answers to frequently asked questions to help you confidently take the next step.</p>

<ul>
    <li>
        <span style="color: #5D1725;"><b>What is the difference between the General and Military concentrations?</b></span><br/>
        Each semester one or more classes will be offered that are more specific to engineers in the military.  There is an Introduction to Military Engineering class as well as other potential courses within engineering and other colleges.<br/><br/>
    </li>
    <li>
        <span style="color: #5D1725;"><b>Which classes can be included in the MENG program of study?</b></span><br/>
        Students can take all 30 hours within the college of engineering or transfer up to 12 hours from other colleges at the university.  Some examples include business, geoscience, education, and others, as approved by the advisor. Classes must be graduate level and students must have met necessary prerequisites.<br/><br/>
    </li>
    <li>
        <span style="color: #5D1725;"><b>Do you accept transfer credit?</b></span><br/>
        Yes, you may transfer up to 9 hours from an accredited university. A formal transfer approval form must be submitted to receive credit.<br/><br/>
    </li>
    <li>
        <span style="color: #5D1725;"><b>Are there additional admission requirements to the online MENG program?</b></span><br/>
        Yes, in addition to university requirements, all students must have completed the following standard engineering undergraduate courses:
        <ul>
            <li>Calculus I - IV and Differential Equations</li>
            <li>One year of calculus-based physics</li>
            <li>One semester of a general chemistry class</li>
            <li>Two - three engineering science courses (e.g., electronic circuits, engineering mechanics, thermodynamics, production control systems)</li>
        </ul>
        More details about the program requirements can be found in our <a href="https://www.bagley.msstate.edu/wp-content/uploads/MENG-Program-Guide-June-2019.pdf">Program Guide</a>.<br/><br/>
    </li>
    <li>
        <span style="color: #5D1725;"><b>Can the entire program be completed online?</b></span><br/>
        Yes, the MENG coursework can be completed 100% online.<br/><br/>
    </li>
</ul>

<p>If you have other questions or if we can assist you in any way, please contact us.  We're ready to help.</p>
<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.dknox_swann_meng')
@endsection

@section('apply')
	@include('common.apply')
@endsection