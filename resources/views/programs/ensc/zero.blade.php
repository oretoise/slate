@extends('layouts.mjml')

@section('content')
<h3>Day 0 - Subject: Thank you for checking out MSU’s online Environment and Sustainability Certificate!</h3>

<img class="img-right" src="https://goto.msstate.edu/www/images/Distance/programs/ensc/ensc_1.png" width="350px" alt="Man sitting on bench across from a newly planted garden."/>

<p>Dear @@{{First}},</p>

<p>Thank you for checking out MSU’s online Environment and Sustainability Certificate.</p>
<p>This certificate will give students an opportunity to gain hands-on experience in an environmental area of interest to them. Students will study the technical aspects of issues such as climate change and energy, and learn how our values, beliefs, and governmental policies affect how these issues are addressed. Students will also learn about sustainable practices and lifestyle choices that can reduce their ecological footprint.</p>
<p>Check out how you can get started by reviewing our <a href="https://online.msstate.edu/ensc/program-structure/">program curriculum</a> information.</p>
<p>Because MSU is accredited by the Southern Association of Colleges and Schools Commission on Colleges (SACSCOC), your courses will meet the same standards as on-campus courses.  Also, your online degree will not be differentiated from an on-campus degree.</p>
<p>Are you <a href="https://online.msstate.edu/ensc/admissions-process/">ready to apply</a>? If you have any questions or concerns, please contact us. We are ready to help.</p>
<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.dknox')
@endsection

@section('apply')
	@include('common.apply')
@endsection