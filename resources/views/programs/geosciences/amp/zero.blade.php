@extends('layouts.mjml')

@section('content')
<h3>Day 0 - Subject: Thank you for checking out MSU's online Applied Meteorology program!</h3>

<p>Dear @@{{First}},</p>

<p>Thank you for your interest in the <b>Applied Meteorology (AMP) program</b>. The AMP was developed in consultation with representatives from the University Corporation for Atmospheric Research (UCAR), the Cooperative Program for Operational Meteorology, Education and Training (COMET), the National Weather Service, and the Caribbean Weather Service and is designed for individuals with meteorological, environmental, or hazards-related careers worldwide.</p>

<p>Successful completion of the entire two-year program will earn students a Master of Science degree in Geosciences from Mississippi State University (MSU). All the courses are taught online except for the final five-day capstone workshop held on the campus of MSU in Starkville, MS.  The course schedule for the AMP can be accessed <a href="https://online.msstate.edu/amp#program-structure">here</a>.</p>

<p>To enter the Applied Meteorology program, you must hold a bachelor's degree in a science field from a four-year educational institution that has unconditional accreditation from a regional accrediting agency.</p>

<p>An upper level course in Synoptic Meteorology (or equivalent) and at least Calculus I are prerequisites for beginning the program of study. The Synoptic Meteorology class can be taken online through MSU.</p>

<p>We prefer that new students begin in the fall semester, but applications are accepted at any time.  The deadline for fall admission is <b>August 1</b>.</p>

<p>I hope that you will find that our program meets your needs and we can begin the process for admissions. If you have any questions or concerns, please contact me, and I will be glad to assist you!</p>

<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.jbailey')
@endsection

@section('apply')
	@include('common.apply')
@endsection