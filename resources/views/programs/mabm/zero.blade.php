@extends('layouts.responsive')

@section('content')
<h3>Day 0 - Subject: Thanks for your interest in the MABM program!</h3>
<p>Dear *|FNAME|*,</p>

<p>Thank you for your interest in the online Master of Agribusiness Management (MABM) program at Mississippi State University.</p>

<p>As an interdisciplinary degree between the College of Agriculture and Life Sciences and the College of Business, the online MABM combines the technical aspects of agricultural economics with finance, management, and marketing skills.</p>

<p>The production of food and other agricultural products becomes more and more important as the world's population grows, making this a highly marketable degree.</p>

<p>The MABM is designed to prepare students to meet the unique challenges facing industries in the food system.  These industries include but are not limited to:</p>

<ul>
    <li>Food production and distribution</li>
    <li>Agricultural supply logistics</li>
    <li>Financial services</li>
    <li>Food marketing</li>
</ul>

<p>I will follow up with any questions you had in your request for information query shortly.  In the meantime, please view our <a href="">(FIXME)program brochure</a> detailing admission requirements, prerequisites, and program curriculum.</p>
<p>Let me know if you have any questions. I'm happy to help!</p>
<p>Thank you,</p>
@endsection

@section('signature')
	@include('signatures.dknox')
@endsection

@section('apply')
	@include('common.apply')
@endsection