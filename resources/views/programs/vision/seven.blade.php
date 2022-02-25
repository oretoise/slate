@extends('layouts.mjml')

@section('content')
<h3>Day 7 - Subject: If you have questions, MSU has answers!</h3>
<p>Dear @@{{First}},</p>

<p>Wondering if the time to start the Vision Specialist certificate is now? Here are answers to frequently asked questions to help you confidently take the next step.</p>

<ol>
    <li>
        <b>Is the coursework offered completely online?</b><br/>
        Yes!  Starting with the class of 2020, the three-week residency component is no longer required!  All coursework (four classes) will be online with some activities conducted in agencies that are serving individuals who are blind or visually impaired.<br/><br/>
    </li>
    <li>
        <b>Would should apply?</b><br/>
        A 100-hour practicum is included in the program; therefore, prospective students must be employed in a rehabilitation agency or enrolled in a master's rehabilitation counseling degree program.<br/><br/>
    </li>
    <li>
        <b>Are there stipends available?</b><br/>
        Yes, there are limited federal stipends available.  Check out the <a href="https://online.msstate.edu/vision#admissions-process/">Finances for Stipends</a>.
    </li>
</ol>

<p>For more frequently asked questions about the program, admissions, or student services, visit our <a href="https://online.msstate.edu/vision/">website</a>.</p>
<p>Thanks,</p>
@endsection

@section('signature')
	@include('signatures.sclardy')
@endsection

@section('apply')
	@include('common.apply')
@endsection