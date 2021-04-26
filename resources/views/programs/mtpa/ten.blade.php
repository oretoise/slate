@extends('layouts.mjml')

@section('content')
<h3>Day 10 - Subject: MSU’s Career Center is Available for YOU!</h3>
<p>Dear @@{{First}},</p>

<p>Whether your goal is to move up in your current company or land a job in a new one, MSU’s Career Center is here to help you! Once admitted to the university, our online students have access to many online Career Center resources.  The Career Center can help you brush up on your interview skills, offer tips to improve your resume, provide salary information, as well as many other useful services.</p>
<p>Our students can create a profile in Connections, an online forum to post your resume and apply for jobs, as well as access Going Global and Career Shift job information boards.</p>
<p>Online students enjoy participating in the Career Center’s Virtual Career fair, which connects virtual jobseekers with employers in an online, live event. The Virtual Career Fair features 27 SEC and ACC universities that join together to promote their students through this unique method of connecting.</p>
<p>Visit the <a href="http://www.career.msstate.edu/" title="Career Center homepage">Career Center</a> or contact them by phone at 662.325.3344 to find out how MSU online students can connect with employers around the world.</p>
<p>As always, if you have any questions or would like assistance, please don’t hesitate to email or call me!</p>
<p>I look forward to hearing from you soon.</p>
<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.sclardy')
@endsection

@section('apply')
	@include('common.apply')
@endsection