@extends('layouts.mjml')

@section('content')
<h3>Day 0 - Subject: Thank you for checking out MSU's online Master of Science in Sustainable Bioproducts program!</h3>

<p>Dear @@{{First}},</p>

<p>Thank you for checking out MSU's online Master of Science in Sustainable Bioproducts degree.</p>
<p>The Department of Sustainable Bioproducts promotes the responsible use of our planet's abundant renewable resources by developing, innovating, and improving bio-based products, materials, and energy for the economic and environmental benefit of all people.</p>

<p>Our online degree program allows both traditional students and working professionals to pursue their coursework and interact with our faculty from anywhere in the world.  Graduates of our master's program have gone on to careers at forest products companies, research labs, trade associations, the U.S. Forest Service, and institutions of higher learning.</p>
<p>Application deadlines for online students at Mississippi State are as follows:</p>

<p>
Fall Admission Deadline:  <b>August 1</b><br/>
Spring Admission Deadline:  <b>December 1</b><br/>
Summer Admission Deadline:  <b>May 15</b>
</p>

<p>Because MSU is accredited by the Southern Association of Colleges and Schools Commission on Colleges (SACSCOC), your courses will meet the same standards as on-campus courses.  Also, your online degree will not be differentiated from an on-campus degree.</p>

<p>Are you ready to <a href="https://online.msstate.edu/sbp#admissions-process">apply</a>? If you have any questions or concerns, please contact me. I am ready to help.
<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.mwolfe')
@endsection

@section('apply')
	@include('common.apply')
@endsection