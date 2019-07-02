@extends('layouts.responsive')

@section('content')
<h3>Day 3 - Subject: Important Info about Licensure and SEED</h3>
<p>Dear @{{First}},</p>

<p>Thank you again for your interest in our distance Master of Science in Secondary Education (SEED) at Mississippi State University (MSU).</p>

<p>I wanted to share some important information, regarding licensure:  Please be aware that teacher licensure is state-mandated. This means that as a Mississippi institution, we can only grant a Mississippi teaching license.  Graduates of the SEED program may be eligible to be recommended for the Class AA Mississippi Educator License.</p>

<p>If you are not a Mississippi resident, before you apply to this program, you will need to check with the state department of education where you want to teach and ask them about reciprocity for a MS teaching license. They will explain the process to turn your MS teaching license into a license to teach in the state of your choice.</p>

<p>Unfortunately, we are no longer able to place students in Georgia for an internship.</p>

<p>Let me know what questions you have.  I'm happy to help you get started with making a difference in the lives of our youth as a teacher!</p>

<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.vtate')
@endsection

@section('apply')
	@include('common.apply')
@endsection