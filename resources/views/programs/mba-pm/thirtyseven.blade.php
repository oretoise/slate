@extends('layouts.mjml')

@section('content')
<h3>Day 37 - Subject: Hear from our online MBA-PM Faculty</h3>

<p>
    Dear @@{{First}},
</p>

<p>
    At MSU, it’s about you! Read what faculty have to say about the online MBA experience.
</p>

<p>
    <i>
        "The online format has provided a platform to engage students throughout the world and across the United States, leveraging myriad professional talents that have brought a richness to the problems and issues we address in class. We create a sense of community through rigorous discussions. Students submit their thoughts to me, and I can send comments back almost immediately. In the end, meaningful information is shared, problems are solved, and a classroom with a wonderfully human touch emerges."
    </i>
</p>

<p style="text-align: right; color: #5D1725;">
    <b>Dr. Daniel Holt<br/>
    Associate Professor of Management</b>
</p>

<p>
    <i>
        "My goal for every online student is to have an immersive experience regardless of whether it is a face-to-face experience or if the student is 1,000 miles away.  In my online course, I lecture, we have presentations, and we discuss relevant current day issues just like the face-to-face version of my class.  I try to foster a feeling of community within the class.  One of the chief goals of my online class is for students to learn the content but also learn from other students who are drawing from different work backgrounds, cultures, and attitudes.  One of the best aspects of online education is the diversity of students in the program that bring a fresh and diverse voice to business issues."
    </i>
</p>

<p style="text-align: right; color: #5D1725;">
    <b>Dr. Joel Collier<br/>
    Professor of Marketing/Quantitative Analysis/Business Law</b>
</p>

<p>
    From program staff to program faculty, we are all here to assist you in the pursuit of your academic endeavors.
</p>

<p>
    Let me know if you have any questions.  I'm happy to help!
</p>
@endsection

@section('signature')
	@include('signatures.mjimerson')
@endsection

@section('apply')
	@include('common.apply')
@endsection