@extends('layouts.mjml')

@section('content')
<h3>Day 3 - Subject: If you have questions, we have answers!</h3>
<p>Dear @@{{First}},</p>

<p>Wondering if the time to start is now?  Here are some answers to frequently asked questions to help you confidently take the next step.</p>
<ul>
    <li>
        <span style="color: #5D1725;"><b>Who Should apply?</b></span><br/>
		This program is designed for undergraduate students who wish to delve deeper into concepts related to issues such as climate change and energy, sustainable practices, and governmental policies.  Students will study the technical aspects of issues such as climate change and energy, and learn how our values, beliefs, and governmental policies affect how these issues are addressed. Students will also learn about sustainable practices and lifestyle choices that can reduce their ecological footprint.<br/><br/>
	</li>
	<li>
		<span style="color: #5D1725;"><b>Why choose MSU's Environment and Sustainability Certificate?</b></span><br/>
		MSU's Environment and Sustainability Certificate will give students an opportunity to gain hands-on experience in an environmental area of interest to them.  Students can complete 16 hours of coursework to receive this certificate.<br/><br/>
	</li>
	<li>
		<span style="color: #5D1725;"><b>Can the entire program be completed online?</b></span><br/>
		Yes, the coursework can be completed 100% online.
	</li>
</ul>

<p>If you have other questions or if I can assist you in any way, please contact me.  I'm ready to help.</p>
<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.mwolfe')
@endsection

@section('apply')
	@include('common.apply')
@endsection