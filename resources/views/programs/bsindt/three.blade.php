@extends('layouts.responsive')

@section('content')
<h3>Day 3 - Subject: Careers you can choose with an INDT degree!</h3>
<p>Dear @{{First}},</p>

<p>
	<img class="img-right" src="https://goto.msstate.edu/www/images/Distance/bsindt/bsindt_2.png" />
	Would you like to jump start your career in the manufacturing sector or in the automation of manufacturing processes?
</p>

<p>You can with the INDT degree! Choose from two concentrations:</p>

<ul>
	<li><b>Manufacturing and Maintenance Management</b> involves the management, maintenance, and day-to-day operation and improvement of manufacturing processes.</li>
	<li><b>Industrial Automation</b> includes fixed automation, robotics, and the troubleshooting of automated systems and their role in the manufacturing environment.</li>
</ul>

<p>Many of our graduates have started their careers with outstanding companies such as Caterpillar, Milwaukee Electric Tool, Nissan North America, and more!</p>
<p>Some of the most recent job titles of our graduates include Production Supervisor, Quality Engineer, and Engineer Specialist.</p>
<p>Check out the <a href="http://distance.msstate.edu/bsindt/outlook">Career Outlook</a> for more job titles and potential employers.</p>
<p>Ready to apply? I'll be happy to assist you or answer any questions.</p>
<p>Sincerely,</p>
@endsection

@section('signature')
	@include('signatures.vtate')
@endsection

@section('apply')
	@include('common.apply')
@endsection