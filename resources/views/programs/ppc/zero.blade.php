@extends('layouts.mjml')

@section('content')
<h3>Day 0 - Subject: Thank you for your interest in MSU's online Public Procurement Certificate!</h3>
<p>Dear @@{{First}},</p>

<p>Thank you for your interest in the online Public Procurement Certificate at Mississippi State University (MSU)! The certificate is offered by the Department of Political Science and Public Administration in the College of Arts and Sciences. The certificate is designed for individuals who work in or intend to work in government in a role related to the procurement and contract management function. </p>
<p>In addition to procurement and contract management, career occupations include, but are not limited to, senior general management, budget, finance, accounting, construction, information technology, communications, public works, law enforcement, fire and rescue, strategic planning, and risk management.</p>
<p>To see the types of courses that are affiliated with the certificate, please visit our <a href="https://online.msstate.edu/ppc">website</a>.</p>
<p>Because MSU is accredited by the Southern Association of Colleges and Schools Commission on Colleges (SACSCOC), your classes will meet the same standards as those on campus. Also, your online degree will not be differentiated from an on-campus degree.</p>
<p>Ready to <a href="https://www.online.msstate.edu/ppc#admissions-process">apply</a>? I'll be happy to assist you or answer any questions.</p>
<p>All the best, </p>
@endsection

@section('signature')
	@include('signatures.dknox')
@endsection

@section('apply')
	@include('common.apply')
@endsection