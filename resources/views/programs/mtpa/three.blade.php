@extends('layouts.mjml')

@section('content')
<h3>Day 3 - Subject: If you have questions, we have answers!</h3>
<p>Dear @@{{First}},</p>

<p>After reviewing the online MPA/MTAX program website and brochure, you may have looming questions that you are unsure how to ask.  I am including some of the frequently asked questions that I receive from prospective students.</p>
<ul>
	<li>
		<b>Is the GMAT or GRE required?  Can it be waived?</b><br/>
		The academic department requires that you take the GMAT.  This requirement is usually waived for applicants with a 3.5 or higher GPA.  *GMAT requirements are currently being waived for all applicants.<br/><br/>
	</li>
	<li>
		<b>Are there additional fees outside of the graduate tuition rate?</b><br/>
		In addition to the graduate tuition, program students will be charged a $25 per credit hour instructional support fee along with a $249 per credit hour distance fee.

		<br/><br/>
        
        <table>
            <tbody>
                <tr>
                    <td class="divider staff">Instructional Support Fee</td>
                    <td class="divider staff">($25 per credit hour)</td>
                </tr>
                <tr>
                    <td class="divider staff">College of Business Distance Fee</td>
                    <td class="divider staff">($249 per credit hour)</td>
                </tr>
            </tbody>
        </table>

		<br/>* Tuition and fees are subject to change.<br/><br/>
	</li>
	<li>
		<b>Are there any prerequisites?  Do I have to have the prerequisites completed prior to being admitted into the program?</b><br/>
		Yes, there are required prerequisite courses for the online MPA/MTAX program.  Those prerequisites can be completed online through Mississippi State University. The prerequisite courses do not have to be completed prior to being admitted; however, these courses must be taken prior to enrolling in the core program courses.<br/><br/>
	</li>
	<li>
		<b>What is the course delivery like? How does this all work?</b><br/>
		Our courses are semester based.  Each class and each instructor are unique, so the delivery of information may vary from course to course.
	</li>
</ul>
<p>Common course activities may include:</p>
 <ul>
	<li>Quizzes</li>
	<li>Discussion boards</li>
	<li>Exams</li>
	<li>Posted lectures</li>
	<li>Presentations</li>
	<li>Case studies</li>
</ul>
<p>I hope you find this information helpful.</p>
<p>Please let me know if you have any questions or if I can assist you in any way.</p>
<p>Thanks,</p>
@endsection

@section('signature')
	@include('signatures.sclardy')
@endsection

@section('apply')
	@include('common.apply')
@endsection