@extends('layouts.mjml')

@section('content')
<h3>Day 3 - Subject: What can the Environmental Geosciences degree do for you?</h3>

<p>Dear @@{{First}},</p>

<img class="img-right" src="https://goto.msstate.edu/www/images/Distance/programs/geosciences/engs/engs_1.png" />

<p>Because the Environmental Geosciences program can be tailored to fit your educational needs, there are many careers this degree can help you attain.  For example, by completing the program, you could:</p>

<ul>
    <li>Share knowledge gained with the public through informal science education by working for a museum or non-profit.</li><br/>
    <li>Use geospatial technology to research patterns or trends in earth and atmospheric processes. This could be for government, higher education, or private industry.</li><br/>
    <li>Teach earth science classes at the community college level.</li>
</ul>

<p><a href="https://online.msstate.edu/geosciences/engs#admissions-process"Apply</a> for the Environmental Geosciences program today!</p>
<p>Sincerely,</p>
@endsection

@section('signature')
	@include('signatures.jbailey')
@endsection

@section('apply')
	@include('common.apply')
@endsection