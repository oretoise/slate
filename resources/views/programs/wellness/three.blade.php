@extends('layouts.responsive')

@section('content')
<h3>Day 3 - Subject: Clinical Health Promotion and Wellness Coaching Certificate Information</h3>

<p>Dear *|FNAME|*,</p>

<img class="img-right" src="https://goto.msstate.edu/www/images/Distance/programs/wellness/wellness_1.png" />

<p>The Clinical Health Promotion and Wellness Coaching graduate certificate is a collaborative initiative funded by the Blue Cross & Blue Shield of Mississippi Foundation.</p>

<p>This 21-hour certificate includes three phases:</p>
<ol>
    <li>Classroom learning:  Four (4) courses are available completely online.</li>
    <li>In-clinic demonstration:  Health Center Practicum (3 credit hours) currently offered at the MSU Longest Student Health Center in Starkville, MS, during the spring semester. All classroom learning courses must be completed before beginning the Practicum.</li>
    <li>Wellness Coaching Internship:  Field-based clinical internship (6 credit hours) in a specified health care facility within the state of Mississippi during the summer semester. All other components must be completed before beginning the Internship.</li>
</ol>

<p>The certificate program may be completed as part of the master’s degree in <a href="http://distance.msstate.edu/health">Food Science, Nutrition, and Health Promotion with a concentration in Health Promotion</a> or as a stand-alone certificate.</p>

<p>If you're interested in learning techniques to assist patients in Mississippi with their health goals to improve their lifestyle and function, then you could benefit from this program.</p>

<p>If you have any questions, please ask.</p>
<p>Thank you,</p>
@endsection

@section('signature')
	@include('signatures.dknox')
@endsection

@section('apply')
	@include('common.apply')
@endsection