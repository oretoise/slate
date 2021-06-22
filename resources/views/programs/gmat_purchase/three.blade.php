@extends('layouts.mjml')

@section('content')
<h3>Day 3 - Subject: “MBA…Your Way” Student Experience with Mississippi State Online!</h3>
<p>Dear @@{{First}},</p>

<p>
Mississippi State Online faculty and staff works diligently to enrich the experience of our students throughout their academic journeys. See what our students have to say about their “MBA, Your Way” experience!
</p>

<p>
<i>"I chose MSU because of the accessibility to the program. I started the MBA program from South Korea, so I needed to be able to do work on my own time without mandatory meeting times and classes. As a pilot in the army, my schedule is always changing, and Mississippi State’s MBA program has always worked around that for me. The quality of the program has been fantastic, and I couldn’t be happier with my choice. Hail State!"</i>
</p>

<p style="text-align: right; color: #5D1725;">
<b>-Nolan, Harker Heights, TX</b>
</p>

<p>
<i>"The flexibility of MSU’s MBA Distance program has been ideal. It would have been impossible for me to achieve my goal of getting my MBA while working full-time if I could not have taken courses online. With the quality of the program and the support of MSU’s excellent professors, this degree has given me the confidence to move forward in my career with the knowledge that I am thoroughly prepared for the challenges ahead."</i>
</p>

<p style="text-align: right; color: #5D1725;">
<b>-Kristen, Starkville, MS</b>
</p>

<p>
<i>"I have found that the organization and structure of the curriculum was meticulously planned. Online delivery of the coursework and the quality of the instruction have exceeded my expectations. The professors have been supportive and available as needed. I truly enjoy being a student again."</i>
</p>

<p style="text-align: right; color: #5D1725;">
<b>-Tarek, Spring, TX</b>
</p>

<p>
If you’d like to share Nolan, Kristen, and Tarek’s experience, let us enrich your graduate school experience and bring our campus to YOU!<br />
<br />
Let me know if you have any questions. I’m happy to help!
</p>
@endsection

@section('signature')
	@include('signatures.mjimerson')
@endsection

@section('apply')
	@include('common.apply')
@endsection