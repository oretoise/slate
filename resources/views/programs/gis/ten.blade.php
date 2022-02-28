@extends('layouts.mjml')

@section('content')
<h3>Day 10 - Subject: What Can You Do with the GIS Certificate?</h3>
<img class="img-right" src="https://goto.msstate.edu/www/images/Distance/programs/gis/gis_1.png" />
<p>Dear @@{{First}},</p>

<p>Thinking about getting a GIS Certificate? Wondering what you can do with it?  Students completing this certificate could work as a GIS Analyst, GIS Technician, Remote Sensing Analyst, or other similar positions.</p>
<p>They can also enhance their skills in other professions that may require or sometimes use GIS such as Geology, Meteorology, Forestry, Emergency Management, Environmental Science, City Planning and Organization, Utilities management, etc.</p>
<p>Because the use of spatial data applies to almost every field, there are LOTS of ways students could use the skills earned in this certificate program.</p>
<p>Now are you ready to start your journey to your GIS Certificate? <a href="https://www.apply.msstate.edu/">Apply today!</a></p>
<p>FYI:  Your application must be submitted by August 1st to be considered for fall admission. New students are only admitted into the program in the fall semester unless you have already completed some of the requirements.  We would love for you to join the Bulldog Family! Please contact me if you have any questions.</p>
<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.jbailey')
@endsection

@section('apply')
	@include('common.apply')
@endsection