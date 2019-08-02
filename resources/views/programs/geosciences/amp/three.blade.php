@extends('layouts.mjml')

@section('content')
<h3>Day 3 - Subject: What can you do with an Applied Meteorology degree?</h3>

<p>Dear @@{{First}},</p>

<img class="img-right" src="https://goto.msstate.edu/www/images/Distance/programs/geosciences/amp/amp_1.png" />

<p>Would forecasting the weather for Air Force One be exciting to you? One of our Applied Meteorology graduates has done just that!</p>
<p>Do you want to take your meteorology career to the next level or get into a weather-related field?</p>
<p>Applied Meteorology graduates can make forecasts for military operations, as well as employ geospatial technology to study weather patterns.</p>
<p>Check out the <a href="https://online.msstate.edu/geosciences/amp/">Applied Meteorology website</a> for more information.</p>
<p><a href="https://online.msstate.edu/geosciences/amp/admissions-process">Apply</a> for the Applied Meteorology program today! The admission deadline is <b>August 1</b>.</p>
<p>If you need assistance or have additional questions about the program, I'll be happy to assist you.</p>
<p>Sincerely,</p>
@endsection

@section('signature')
	@include('signatures.jbailey')
@endsection

@section('apply')
	@include('common.apply')
@endsection