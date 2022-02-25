@extends('layouts.mjml')

@section('content')
<h3>Day 3 - Subject: Career Paths with the MSIT Degree</h3>
<p>Dear @@{{First}},</p>

<img class="img-right" src="https://goto.msstate.edu/www/images/Distance/programs/msit/msit_1.png" />

<p>Would you like to implement instructional technologies in educational or corporate settings?</p>

<p>With the online MS in Instructional Technology degree, you will be able to do just that.  Choose from three concentrations that will give you the competitive advantage:</p>

<ol>
    <li>
        <p><b>Instructional Design</b>–Emphasizes the design, delivery, management, and evaluation of learner-centered instructional solutions in a variety of settings.</p>
        <p>Potential careers include:</p>

        <ul>
            <li>Instructional Designer</li>
            <li>Curriculum Developer</li>
            <li>Trainer/Training Specialist</li>
        </ul>
    </li>
    <li>
        <p><b>Distance Education</b>–Emphasizes the application of online learning theories and technologies to design, delivery, and management of online education.</p>
        <p>Potential careers include:</p>
        <ul>
            <li>E-Learning Specialist</li>
            <li>Distance Education Coordinator, Director, or Manager</li>
        </ul>
    </li>
    <li>
        <p><b>Multimedia</b>-Applies multimedia learning theories to the design and development of learning solutions using state-of-the art multimedia software applications.</p>
        <p>Potential careers include:</p>
        <ul>
            <li>Multimedia Designer</li>
            <li>Web Designer</li>
        </ul>
    </li>
</ol>

<p>Ready to <a href="https://online.msstate.edu/msit#admissions-process"apply</a>? I'll be happy to assist you or answer any questions.</p>
<p>Sincerely,</p>
@endsection

@section('signature')
	@include('signatures.sclardy')
@endsection

@section('apply')
	@include('common.apply')
@endsection