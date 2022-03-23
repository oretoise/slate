@extends('layouts.mjml')

@section('content')
<h3>Day 0 - Subject: Thank you for checking out MSU's online Master of Science in Conservation Education program!</h3>

<img class="img-right" src="https://goto.msstate.edu/www/images/Distance/programs/conservation/conservation-1.jpg" alt="Elephant and schoolchildren." />
<p>Dear @@{{First}},</p>

<p>Thank you for checking out MSU's online, non-thesis Master of Science in Conservation Education degree.</p>
<p>This innovative and comprehensive program is designed to meet accreditation and industry standards.  Conservation educators work in a variety of non-formal and formal settings to promote environmental stewardship and help create environmentally responsible citizens.</p>
<p>The conservation education program is designed to prepare students for career opportunities in some of the following areas:</p>
<ul>
	<li>Education Manager or Director</li>
	<li>Outreach Program Coordinator</li>
	<li>Environmental Educator</li>
	<li>Teaching Naturalist</li>
	<li>Environmental Specialist</li>
	<li>Instructional Guide</li>
</ul>

<p>Application deadlines for online students at Mississippi State are as follows:</p>
<p>
Fall Admission Deadline:  <b>August 1</b><br/>
Spring Admission Deadline:  <b>December 1</b><br/>
Summer Admission Deadline:  <b>May 15</b>
</p>

<p>Because MSU is accredited by the Southern Association of Colleges and Schools Commission on Colleges (SACSCOC), your courses will meet the same standards as on-campus courses.  Also, your online degree will not be differentiated from an on-campus degree.</p>
<p>Are you ready to <a href="https://online.msstate.edu/conservationed#admissions-process">apply</a>? If you have any questions or concerns, please contact us. We are ready to help.</p>
<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.mwolfe_hines')
@endsection

@section('apply')
	@include('common.apply')
@endsection