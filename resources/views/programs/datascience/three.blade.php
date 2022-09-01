@extends('layouts.mjml')

@section('content')
<h3>Day 3 - Subject: If you have questions, we have answers!</h3>

<p>Dear @@{{First}},</p>

<p>Wondering if the time to start is now?  Here are some answers to frequently asked questions to help you confidently take the next step.</p>	

<ul>
    <li>
        <b>How many courses are needed to complete this certificate?</b><br/>
        The Data Science Pedagogy Certificate comprises 12 credit hours. Information about the courses required to complete the certificate can be found in the <a href="https://online.msstate.edu/datascience#program-structure">program structure.</a> 
    </li><br/>
    <li>
        <b>Is this program available at the graduate level?</b><br/>
        Yes, this certificate is available only at the graduate level and must include all courses at the 8000 level.
    </li><br/>
    <li>
        <b>Can the entire program be completed online?</b><br/>
        Yes, the coursework can be completed 100% online. 
    </li>
</ul>

<p>If you have other questions or if I can assist you in any way, please contact me.  I am ready to help.</p>
@endsection

@section('signature')
	@include('signatures.dknox')
@endsection

@section('apply')
	@include('common.apply')
@endsection