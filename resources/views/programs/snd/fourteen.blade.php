@extends('layouts.mjml')

@section('content')
<h3>Day 14 - Subject: Your MSU Online Questions-> Answered</h3>
<img class="img-right" src="" />

<p>Dear @@{{First}},</p>
<p>Thank you for your interest in the online programs at MIssissippi State.  Below you will find some helpful answers to some of the most frequently asked questions regarding the programs.</p>

<ul>
	<li>
		<span style="color: #5D1725;"><b>What degree programs are offered by online education?</b></span><br/>
		There are many online education degree programs available completely online at the undergraduate and graduate levels, as well as certificate programs. Please visit our <a href="https://online.msstate.edu/academic-programs/">Academic Programs</a> page for a full listing.<br/><br/>
	</li>
	<li>
		<span style="color: #5D1725;"><b>Is the academic content of online education equivalent to the main campus? </b></span><br/>
		Yes, online education courses/programs are of the same academic quality, rigor, and equivalency of main campus courses. Prior to any distance education course/program's initial delivery, the University Committee on Courses and Curricula and administrative approval must be obtained. All distance education courses/programs delivered are held to applicable university/IHL regulations.<br/><br/>
	</li>
</ul>

<p>For more frequently asked questions, visit our <a href="https://online.msstate.edu/faq/">FAQ</a> page, or ask me directly. I'm happy to help.</p>
<p>Hail State!</p>
@endsection

@section('signature')
	@include('signatures.jbailey')
@endsection

@section('apply')
	@include('common.apply_snd')
@endsection