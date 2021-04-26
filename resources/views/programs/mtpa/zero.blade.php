@extends('layouts.mjml')

@section('content')
<h3>Day 0 - Subject: Thank you for your interest in our Online MPA/MTAX program!</h3>

<img class="img-right" src="https://goto.msstate.edu/www/images/Distance/programs/mtpa/mtpa_1.png" />

<p>Dear @@{{First}},</p>

<p>Thank you for your interest in our online Master of Professional Accountancy (MPA) /Master of Taxation (MTAX) program at Mississippi State University.</p>
<p>MSU's Adkerson School of Accountancy provides an accredited, flexible, and affordable MPA/MTAX degree to students around the world. The emphasis at all times is on "quality": quality students, quality professors, and quality education.</p>
<p>Program Highlights:</p>
<ul>
	<li>30-credit hours to complete, 100% online</li>
	<li>Pay the in-state tuition rate, no matter your state of residency.</li>
	<li>Courses are taught by the same professors as our on-campus program</li>
	<li>Accredited by the Southern Association of Colleges and Schools Commission on Colleges (SACSCOC) and dually accredited for Business and Accounting by the Association to Advance Collegiate Schools of Business (AACSB)</li>
</ul>
<p>Our online courses will be equally rigorous as those in an on-campus classroom, and your transcripts from MSU will not distinguish between a class taught on-campus and one offered through online education.</p>
<p>I will follow up with any questions you had within your information request shortly.  In the meantime, please visit our <a href="https://online.msstate.edu/mtpa/" title="Master of Taxation and Public Accountancy Website">website</a> for details regarding program admission requirements, prerequisite information, and program curriculum.</p>
<p>Let me know if you have any questions. I'm happy to help!</p>
@endsection

@section('signature')
	@include('signatures.sclardy')
@endsection

@section('apply')
	@include('common.apply')
@endsection