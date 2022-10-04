@extends('layouts.mjml')

@section('content')
<h3>Day 0 - Subject: Thank you for checking out MSU’s online Master’s in Plant Soil Sciences with a concentration in Horticulture.</h3>
<p>Dear @@{{First}},</p>

<p>Thank you for checking out MSU’s online Master’s in Plant Soil Sciences with a concentration in Horticulture degree.   </p>
<p>The Horticulture Master’s program provides education and research opportunities with global impact on the fruit and vegetables, floral, and ornamentals industries. Horticulture is the cultivation and marketing of flowers, fruits, vegetables, and ornamental plants. This program is designed to meet the individual needs of the student and may include courses in mathematics and statistics, biology, chemistry, biochemistry, remote sensing as well as agronomic, horticultural, and weed sciences. This 30-credit hour degree has both thesis and non-thesis options.</p>
<p>See how you can get started by:</p>
<ul>
	<li>Reviewing the <a href="https://online.msstate.edu/pshorticulture">program structure</a> .</li>
	<li>Requesting information about your desired area of study  </li>
</ul>

<p>Application deadlines for online students at Mississippi State are as follows:</p>
<p>
Fall Admission Deadline:  <b>August 1</b><br/>
Spring Admission Deadline:  <b>December 1</b><br/>
Summer Admission Deadline:  <b>May 15</b>
</p>

<p>Because MSU is accredited by the Southern Association of Colleges and Schools Commission on Colleges (SACSCOC), your courses will meet the same standards as on-campus courses.  Also, your online degree will not be differentiated from an on-campus degree.</p>
<p>Are you ready to <a href="https://online.msstate.edu/pshorticulture#admissions-process">apply</a>? If you have any questions or concerns, please contact us. We are ready to help.</p>
<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.mwolfe')
@endsection

@section('apply')
	@include('common.apply')
@endsection