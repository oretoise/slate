@extends('layouts.mjml')

@section('content')
<h3>Day 0 - Subject: Thank you for checking out MSU’s online Doctor of Philosophy in Plant and Soil Science with a concentration in Agronomy</h3>
<p>Dear @@{{First}},</p>

<p>Thank you for checking out MSU’s online Doctor of Philosophy in Plant and Soil Science with a concentration in Agronomy.</p>
<p>The doctoral program in Agronomy provides motivated students the opportunity to succeed in their educational goals within a stimulating environment. We offer our students focused study in areas such as crop rotation, irrigation, plant breeding, soils, soil fertility and turfgrass science which can lead to careers in academia and industry. This program is designed to meet the individual needs of each student and may include courses in mathematics and statistics, biology, chemistry, biochemistry, remote sensing, etc., as well as agronomic, horticultural, and weed science courses. The degree structure is comprised of a minimum of 40 hours of coursework beyond the master’s degree, of which 20 hours are devoted toward dissertation research.</p>
<p>See how you can get started by:</p>
<ul>
	<li>Reviewing the <a href="https://online.msstate.edu/phdagronomy">program structure</a></li>
	<li>Requesting information about your desired area of study /li>
</ul>

<p>Application deadlines for online students at Mississippi State are as follows:</p>
<p>
Fall Admission Deadline:  <b>August 1</b><br/>
Spring Admission Deadline:  <b>December 1</b><br/>
Summer Admission Deadline:  <b>May 15</b>
</p>

<p>Because MSU is accredited by the Southern Association of Colleges and Schools Commission on Colleges (SACSCOC), your courses will meet the same standards as on-campus courses.  Also, your online degree will not be differentiated from an on-campus degree.</p>
<p>Are you ready to <a href="https://online.msstate.edu/phdagronomy#admissions-process">apply</a>? If you have any questions or concerns, please contact us. We are ready to help.</p>
<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.mwolfe')
@endsection

@section('apply')
	@include('common.apply')
@endsection