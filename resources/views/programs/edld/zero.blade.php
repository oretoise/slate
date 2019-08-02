@extends('layouts.mjml')

@section('content')
<h3>Day 0 - Subject: Thank you for your interest in MSU's online EDLD-EDLS degree</h3>
<p>Dear @@{{First}},</p>
<p>Thank you for your interest in the online Master of Science in Educational Leadership with a concentration in School Administration (EDLD-EDLS) at Mississippi State University (MSU)!  This program is designed to prepare educators for careers as school administrators.</p>
<p>EDLD-EDLS online program highlights:</p>
<ul>
    <li>33 hours are required to complete the program.</li>
    <li><b>This program's courses are 100% online;</b> however, two internships are required.</li>
    <li>You can start courses in the spring, summer, or fall semester.</li>
    <li><b>All</b> online students pay <b>in-state tuition</b>.</li>
</ul>

<p>All courses are taught by faculty and staff from MSU.  Because MSU is accredited by the Southern Association of Colleges and Schools Commission on Colleges (SACSCOC), your classes will meet the same standards as those on campus. Your degree will not be differentiated from an on-campus degree.</p>

<p>To see the types of courses that are affiliated with the program, please check out the <a href="https://www.educationalleadership.msstate.edu/academic-programs/school-administration/master-science-educational-leadership-school-administration/">Program Structure</a>.</p>

<p>Are you <a href="https://online.msstate.edu/edld/admissions-process">ready to apply</a>?  If you have any questions or concerns, please contact me, and I will be glad to assist you.</p>
<p>Thanks,</p>
@endsection

@section('signature')
	@include('signatures.vtate')
@endsection

@section('apply')
	@include('common.apply')
@endsection