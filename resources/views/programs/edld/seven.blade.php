@extends('layouts.mjml')

@section('content')
<h3>Day 7 - Subject: Career Paths with the EDLD-EDLS Degree</h3>
<p>Dear @@{{First}},</p>

<img class="img-right" src="https://goto.msstate.edu/www/images/Distance/edld/edld_2.png" />

<p>Would you like to help promote professionalism in your local school or school district? Prepare for a wide range of professional administrative positions in education with the online Master of Science in Educational Leadership with a concentration in School Administration (EDLD-EDLS.)</p>

<p>This program prepares future professionals to</p>

<ul>
    <li>Analyze data</li>
    <li>Evaluate instruction</li>
    <li>Improve student achievement</li>
    <li>Make strategic decisions</li>
    <li>Creatively solve problems</li>
    <li>Establish positive school culture</li>
    <li>Manage resources</li>
</ul>

<p>Career opportunities include positions, such as</p>

<ul>
    <li>Principal</li>
    <li>Assistant Principal</li>
    <li>Coordinator</li>
    <li>Director</li>
    <li>Assistant Director</li>
</ul>

<p>Many of our graduates have started their careers within school districts across Mississippi.  If you are interested in working outside the state of Mississippi, please contact your state's Department of Education to see if this program meets your state's criteria for licensure.</p>

<p>Ready to <a href="https://online.msstate.edu/edld#admissions-process"apply</a>? I'll be happy to assist you or answer any questions.</p>
<p>All the best,</p>

@endsection

@section('signature')
	@include('signatures.sclardy')
@endsection

@section('apply')
	@include('common.apply')
@endsection