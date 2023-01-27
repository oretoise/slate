@extends('layouts.mjml')

@section('content')
<h3>Day 3 - Subject: Why should you complete a bachelor’s degree?</h3>
<p>Dear @@{{First}},</p>
<p>At Mississippi State University, we are excited to offer the Bachelor of Science in Industrial Engineering. This degree is offered completely online!</p>
<p>Because MSU is accredited by the Southern Association of Colleges and Schools Commission on Colleges (SACSCOC), your courses will meet the same standards as on-campus courses. Also, your online degree will not be differentiated from an on-campus degree.</p>
<p>The industrial and systems engineering (ISE) profession uses a variety of specialized knowledge and skills. These include communications, economics, mathematics, physical and social sciences, together with the methods of engineering analysis and design. Many ISEs move into management and are later entrusted to lead companies.  The Industrial Engineering program aims to graduate students with a broad education, with emphasis in Industrial Engineering fundamentals and practices, enabling them to function effectively in systems involving people, materials, information, energy, and money.</p>
<p>If you have questions, please ask. I am happy to help!</p>
@endsection

@section('signature')
	@include('signatures.mwolfe_swann')
@endsection

@section('apply')
	@include('common.apply')
@endsection