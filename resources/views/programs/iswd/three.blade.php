@extends('layouts.mjml')

@section('content')
<h3>Day 3 - Subject: Why should you complete a doctoral degree?</h3>
<p>Dear @@{{First}},</p>

<p>The (Ph.D.) in Instructional Systems and Workforce Development (ISWD) degree program can be tailored to your unique career goals. Graduates pursue careers as faculty, researchers, administrators, evaluators, directors, high-level managers, or consultants.</p>
<p><b>The Ph.D. ISWD degree is for you if you enjoy:</b></p>
<ul>
	<li>writing at a professional level</li>
	<li>researching teaching and learning</li>
	<li>analyzing complex problems and proposing their solutions</li>
	<li>infusing technology in teaching and learning</li>
	<li>presenting new ideas to others</li>
	<li>exploring emerging technologies</li>
</ul>
<p>Ready to apply? I'm happy to assist you or answer any questions.</p>
@endsection

@section('signature')
	@include('signatures.arijal')
@endsection

@section('apply')
	@include('common.apply')
@endsection