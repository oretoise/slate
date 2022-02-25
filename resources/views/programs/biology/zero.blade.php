@extends('layouts.mjml')

@section('content')
<h3>Day 0 - Subject: Thanks for your interest in the General Biology Certificate!</h3>

<p>Dear @@{{First}},</p>

<p>Thank you for your interest in the online General Biology Certificate program at Mississippi State University (MSU). This program will provide students with a better background and understanding of biological sciences. It is designed to allow teachers to obtain the credentials needed to teach biology-based courses at the community college level or dual enrollment courses at the high school level. Courses are taught completely online by the same professors and instructors who teach main campus biology courses at MSU.</p>

<p>The General Biology Certificate can be earned by completing 18 credit hours of graduate level biology courses and can be completed in one year taking two courses per semester.  The program consists of online courses that span the different disciplines within biology, including ecology, microbiology, evolutionary biology, and biotechnology.  The course schedule for the General Biology certificate program can be accessed <a href="https://online.msstate.edu/biology/program-structure">here</a>.</p>

<p>A maximum of six graduate-level and related credit hours may be transferred into the program at the discretion of the graduate coordinator/committee.</p>
<p>If you are interested in enrolling or would like more information regarding admissions, please refer to the <a href="https://online.msstate.edu/biology#admissions-process">website</a>.</p>
<p>I hope you will find that the General Biology Certificate program meets your needs and you start the online application for admission.  The admission deadline for the fall is <b>1 August</b>.  If you have any questions or concerns, please contact me at <a href="mailto:joy.bailey@msstate.edu">joy.bailey@msstate.edu</a>, and I will be glad to assist you!</p>

<p>Sincerely,</p>
@endsection

@section('signature')
	@include('signatures.jbailey')
@endsection

@section('apply')
	@include('common.apply')
@endsection