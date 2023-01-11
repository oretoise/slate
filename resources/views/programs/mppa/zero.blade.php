@extends('layouts.mjml')

@section('content')
<h3>Day 0 - Subject: Thank you for checking out MSU’s online Master of Public Policy and Administration program!</h3>
<p>Dear @@{{First}},</p>

<p>Thank you for checking out MSU’s online Master of Public Policy and Administration degree.</p>
<p>This fully online program allows students the opportunity to gain knowledge and experience to serve in management and upper-level positions in numerous settings including local, state, and federal government; nonprofit organizations; government affairs and relations entities; human resources; policy centers; international affairs; private corporations; hospitals; and universities.</p>
<p>This program is also specifically accredited by the Network of Schools of Public Policy, Affairs, and Administration (NASPAA). The Master of Public Policy and Administration program strives to professionalize and diversify state and local government in Mississippi and the region.</p>
<p>See how you can get started by:</p>
<ul>
	<li>Reviewing the <a href="https://online.msstate.edu/mppa">program structure</a> .</li>
	<li>Scheduling an online meeting or phone to learn more. </li>
</ul>

<p>Application deadlines for online students at Mississippi State are as follows:</p>
<p>
Fall Admission Deadline:  <b>August 1</b><br/>
Spring Admission Deadline:  <b>December 1</b><br/>
Summer Admission Deadline:  <b>May 15</b>
</p>

<p>Because MSU is accredited by the Southern Association of Colleges and Schools Commission on Colleges (SACSCOC), your courses will meet the same standards as on-campus courses.  Also, your online degree will not be differentiated from an on-campus degree.</p>
<p>Are you ready to <a href="https://online.msstate.edu/mppa#admissions-process">apply</a>? If you have any questions or concerns, please contact us. We are ready to help.</p>
<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.lhudson')
@endsection

@section('apply')
	@include('common.apply')
@endsection