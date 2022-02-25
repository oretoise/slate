@extends('layouts.mjml')

@section('content')
<h3>Day 7 - Subject: If you have questions, we have answers!</h3>

<p>Dear @@{{First}},</p>

<p>Wondering if the time to start is now?  Here are some answers to frequently asked questions to help you confidently take the next step.</p>

<ol>
    <li>
        <b>Who should apply?</b><br/><br/>
        The Early Intervention master's program prepares you to serve young children (birth to 5 years old) who have disabilities or other special needs. The program is designed both for full and part-time students who are interested in teacher licensure to work in Part C programs, preschool classrooms, or community-based programs.
    </li><br/>
    <li>
        <b>Why choose MSU's Early Intervention Program?</b>
        <p><b>Mississippi State's online master's degree in Early Intervention gives you the opportunity to:</b></p>

        <ul>
            <li>Complete the only Early Intervention program in the state that is fully online with a focus on children birth to 5 with disabilities and at-risk conditions.</li><br/>
            <li>Build practical skills. Combined with an evidence-based curriculum, you'll practice applied techniques that get proven results. You'll acquire new skills for helping these children to reach their maximum potential.</li><br/>
            <li>Work closely with industry professionals and faculty. This program was designed by our faculty and industry leaders who understand the need for well-trained professionals. The classes are taught by Mississippi State faculty and highly credentialed professionals who are practicing within early intervention programs. Receive the best of both worlds with cutting-edge research and recommended practices as pillars of the curriculum.</li><br/>
            <li>Work and take classes. Designed for the working professional, our classes are fully online with synchronous lectures and real-time class meetings to provide an authentic collaborative experience.</li>
        </ul>
    </li><br/>
    <li>
        <b>What is the cost of this program?</b><br/>
        All online students are charged the in-state graduate tuition rate plus fees.  Tuition typically increases each fall semester.  Please refer to the <a href="https://www.controller.msstate.edu/accountservices/tuition/">"Tuition and Required Fees"</a> on the Online Education tab for current tuition rates.
    </li>
</ol>

<p>Please let me know if I can assist you in any way.</p>
<p>Thank you,</p>
@endsection

@section('signature')
	@include('signatures.dknox')
@endsection

@section('apply')
	@include('common.apply')
@endsection