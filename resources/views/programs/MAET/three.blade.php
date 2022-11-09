@extends('layouts.mjml')

@section('content')
<h3>Day 3 - Subject: If you have questions, we have answers!</h3>
<p>Dear @@{{First}},</p>

<p>Wondering if the time to start is now?  Here are some answers to frequently asked questions to help you confidently take the next step.</p>

<ul>
	<li>
		<span style="color: #5D1725;"><b>Does this program have a non-thesis and thesis option?</b></span><br/>
		Yes, this program offers thesis and non-thesis options to students. 
	</li>
	<li>
		<span style="color: #5D1725;"><b>Can the entire program be completed online?</b></span><br/>
		Yes, the coursework can be completed 100% online. 
	</li>
</ul>

<p>If you have other questions or if we can assist you in any way, please contact us.  We are ready to help.</p>
<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.mwolfe')
@endsection

@section('apply')
	@include('common.apply')
@endsection