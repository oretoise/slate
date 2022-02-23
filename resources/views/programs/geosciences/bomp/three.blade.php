@extends('layouts.mjml')

@section('content')
<h3>Day 3 - Subject: Broadcast/Operational Meteorology Flyer</h3>
<p>Dear @@{{First}},</p>

<p>
	<img class="img-right" src="https://goto.msstate.edu/www/images/Distance/bomp/bomp_1.png" />
	The Broadcast and Operational Meteorology Program (BOMP) can lead to a certificate and/or a degree. For more information about the BOMP certificate, visit the <a href="https://online.msstate.edu/geosciences/bomp">website</a>.
</p>

<p>
	The credits earned with the certificate may also be applied toward a Bachelor of Science in Geosciences with a concentration in Broadcast and Operational Meteorology.
</p>

<p>
	The <a href="https://online.msstate.edu/geosciences/bomp/degree-requirements/">BS degree</a> can be earned by completing all 17 BOMP courses and by satisfying all general education requirements (approximately 72 credit hours) to reach the 124 total credit hours you need.
</p>

<p>
	Check out the latest Broadcast & Operational Meteorology Program (BOMP) <a href="https://online.msstate.edu/files/pdf/Broadcast-Operational-Meteorology-Program.pdf">flyer</a>. It provides detailed information about the online program that can assist you in furthering your career.
</p>

<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.jbailey')
@endsection

@section('apply')
	@include('common.apply')
@endsection