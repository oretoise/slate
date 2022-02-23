@extends('layouts.mjml')

@section('content')
<h3>Day 0 - Subject: Thank you for checking out MSU's online GIS Certificate program!</h3>
<p>Dear @@{{First}},</p>

<p>Thank you for your interest in online education at Mississippi State University (MSU). The Geospatial and Remote Sensing Technologies(GIS) certificate program crosses departmental and college boundaries to offer a program in spatial technologies. This certificate program can serve the needs of undergraduate and graduate students with diverse backgrounds from a variety of disciplines.</p>

<p>The certificate should represent a student's mastery of basic GIS and Remote Sensing coursework. The program requires 15 semester hours.  A minimum of 3 semester hours of coursework is required in each of these three areas:</p>
<ul>
	<li>Geographic Information Systems</li>
	<li>Remote Sensing</li>
	<li>Spatial Positioning Technologies</li>
</ul>
<p>Students are required to complete 6 hours of additional coursework chosen from a list of restricted electives.</p>
<p>All courses in the GIS certificate program are taught completely online by faculty from the Department of Geosciences at MSU and are accredited by the Southern Association of Schools (SACS). Your transcripts from MSU will not distinguish between GIS courses taught on campus and those offered through online education. The course schedule for the program can be accessed on the <a href="https://online.msstate.edu/gis/">GIS website</a>.</p>

<p>I hope that you will find that our program meets your needs and that you will begin the process for admissions. Are you <a href="https://online.msstate.edu/gis/admissions-process/">ready to become a Bulldog</a>? If you have any questions or concerns, please contact me at <a href="mailto:joy.bailey@msstate.edu">joy.bailey@msstate.edu</a>, and I will be glad to assist you!</p>
<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.jbailey')
@endsection

@section('apply')
	@include('common.apply')
@endsection