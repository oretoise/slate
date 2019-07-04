@extends('layouts.responsive')

@section('content')
<h3>Day 0 - Subject: Thank you for checking out MSU's online Environmental Geosciences program!</h3>

<p>Dear @{{First}},</p>

<p>Thank you for your interest in the online Master of Science in Geosciences with a concentration in Environmental Geosciences. The program is designed for students interested in graduate study of a broad cross-section of the geosciences.  Program highlights include:</p>

<ul>
    <li>30-credit hour, non-thesis program, including courses in ocean science, climatology, GIS, and hazards</li>
    <li>Reputable, accredited, and flexible</li>
    <li>Nine online courses and one face-to-face capstone course</li>
    <li>Students choose between two capstone course options: GR 8410 Field Methods Seminar, which is an 8-10 day field-based course or GR 8573 Research in Applied Meteorology, which is a 4-5 day course held on-campus in Starkville, MS. Both options are offered during the summer semester</li>
    <li>All students pay in-state tuition</li>
    <li>Taught online by faculty and staff from the Department of Geosciences at MSU, which is accredited by the Southern Association of Colleges and Schools Commission on Colleges (SACSCOC)</li>
</ul>

<p>Interested in enrolling? Fall admission is preferred, but spring and summer applicants will be considered.  The fall admission deadline is <b>August 1</b>.  Students who wish to apply should have met the following requirements:</p>

<ul>
    <li>A bachelor’s degree from a fully recognized four-year educational institution that has unconditional accreditation with appropriate regional accrediting agencies</li>
    <li>A minimum grade point average of 2.75 on the last 60 hours of undergraduate work</li>
    <li>Completed the two prerequisite courses: Earth Science and Weather & Climate or their equivalents</li>
    <li>The GRE is <b><u>not</u></b> required for admission into this program</li>
</ul>

<p>If you are interested in enrolling or would like more information, please visit our Environmental Geosciences <a href="https://online.msstate.edu/geosciences/engs">website</a>.</p>
<p>If you have any questions or concerns, please contact me, and I will be glad to assist you!</p>
@endsection

@section('signature')
	@include('signatures.jbailey')
@endsection

@section('apply')
	@include('common.apply')
@endsection