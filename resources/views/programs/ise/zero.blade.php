@extends('layouts.mjml')

@section('content')
<h3>Day 0 - Subject: Thank you for checking out MSU's online Industrial & Systems Engineering program!</h3>

<p>Dear @@{{First}},</p>

<p>Thank you for checking out MSU's online Doctor of Philosophy in Industrial & Systems Engineering degree.</p>


This 68-hour degree program offers 48 hours of coursework with an additional 20 hours of research.  This program requires a preliminary exam, a dissertation, and an oral exam in defense of the dissertation.
See how you can get started by:					
•	Checking out our ISE Graduate Program Overview 
•	Finding more information with our ISE Graduate Program Guide 
Application deadlines for online students at Mississippi State are as follows:
Fall Admission Deadline:  August 1
Spring Admission Deadline:  December 1
Summer Admission Deadline:  May 15 
Because MSU is accredited by the Southern Association of Colleges and Schools Commission on Colleges (SACSCOC) and the Accreditation Board for Engineering and Technology, Inc.(ABET), your courses will meet the same standards as on-campus courses.  Also, your online degree will not be differentiated from an on-campus degree.
Are you ready to apply? If you have any questions or concerns, please contact us. We are ready to help.

All the best,


@endsection

@section('signature')
	@include('signatures.dknox_swann')
@endsection

@section('apply')
	@include('common.apply')
@endsection