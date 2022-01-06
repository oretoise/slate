@extends('layouts.mjml')

@section('content')
<h3>Day 3 - Subject: Why should you complete a certificate program?</h3>
<p>Dear @@{{First}},</p>

<p>The applied behavior analysis (ABA) program at Mississippi State University is designed to provide education, training, and experience to students with the goal of preparing them for practice in real-world settings. Our faculty members are equipped with extensive clinical experiences in the field of behavior analysis and have exceptional teaching, supervision, and research skills. Faculty in the ABA program share the goal of preparing students to become behavior analysts who provide high quality, evidence-based services to a wide range of ages, populations, and functioning levels in order to make socially significant changes in the lives of others.</p>
<p>Students will take courses that map on to the 5th edition of the <a href="https://www.bacb.com/task-lists/">Behavior Analyst Certification Board (BACB) task list</a>. Completion of the certificate program leads to certification as a BCBA. BCBAs are commonly employed in private practices, hospitals, clinics, and schools.</p>
<p>Ready to <a href="https://online.msstate.edu/caba/admissions-process/">apply</a>? I'm happy to assist you or answer any questions.</p>
<p>Hail State!</p>

@endsection

@section('signature')
	@include('signatures.sclardy')
@endsection

@section('apply')
	@include('common.apply')
@endsection