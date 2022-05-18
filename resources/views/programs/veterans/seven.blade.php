@extends('layouts.mjml')

@section('content')
<h3>Day 7 - Subject: If you have questions, we have answers!</h3>
<p>Dear @@{{First}},</p>

<p>I would like to provide you with answers to some of the most frequently asked questions regarding the Veterans' Certificate Program.</p>

<ol>
    <li>
        <b>Is this program offered completely online?</b><br/>
        Yes, the VCP program is offered completely online.
    </li><br/>
    <li>
        <b>Can this program be used as an emphasis area for an undergraduate degree or a minor in a graduate degree?</b><br/>
        Yes, the 15 credit hours may be used as an interdisciplinary emphasis area for the BSIS program or a minor for a graduate degree program.
    </li><br/>
    <li>
        <b>Can I apply for financial aid for the VCP?</b><br/>
        Financial Aid is not available for the VCP; however, if the courses for the VCP are used as an emphasis area for the Bachelor of Science in Interdisciplinary Studies (BSIS) degree program, financial aid is available.
    </li>
</ol>

<p>For more frequently asked questions about distance education at MSU, admissions, or student services, visit our <a href="https://online.msstate.edu/faq/">website</a>.</p>
<p>Thanks,</p>
@endsection

@section('signature')
	@include('signatures.arijal')
@endsection

@section('apply')
	@include('common.apply')
@endsection