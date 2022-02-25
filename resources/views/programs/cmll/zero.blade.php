@extends('layouts.mjml')

@section('content')
<h3>Day 0 - Subject: Thank you for checking out MSU's online Master of Arts in Foreign Languages program!</h3>
<p>Dear @@{{First}},</p>

<p>Thank you for your interest in the online Master of Arts in Foreign Languages (MAFL) program at Mississippi State University.  The Department of Classical & Modern Languages and Literatures (CMLL) at Mississippi State University offers a dynamic and growing online M.A. program in Foreign Languages (French, German, and Spanish).</p>

<p>Our graduate courses focus on literature, culture, and film, with a strong foundation in language pedagogy. Our program provides an extremely flexible and interdisciplinary course of study. We also work with the English department to provide instruction in linguistics to interested students. Our M.A. students can also obtain, while working towards their degree, a teaching license, with a specially-designed Pathway to Licensure in World Languages.</p>

<p>Overall, the program is designed to allow students the flexibility to earn a Master's degree that will best position them for their future, with faculty that are fully invested in the success of the department's graduates.</p>
<p>After successful completion of the entire two year program, students will earn an MA in Foreign Languages.  The MAFL degree can be earned by completing 30 - 36 credit hours of online graduate level courses. For a list of available online courses, access the <a href="https://online.msstate.edu/cmll#program-structure">Program Structure</a>.</p>

<p>Are you <a href="https://online.msstate.edu/cmll#admissions-process">ready to apply</a>?</p>
<p>I hope you will find that the MAFL program meets your needs and you start the online application for admission.  The admission deadline for the fall is 1 August.  If you have any questions or concerns, please contact me at <a href="mailto:joy.bailey@msstate.edu">joy.bailey@msstate.edu</a>, and I will be glad to assist you!</p>

<p>Sincerely,</p>
@endsection

@section('signature')
	@include('signatures.jbailey')
@endsection

@section('apply')
	@include('common.apply')
@endsection