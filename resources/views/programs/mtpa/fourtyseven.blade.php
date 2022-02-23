@extends('layouts.mjml')

@section('content')
<h3>Day 47 - Subject: Apply Now!</h3>

<p>I noticed you have not submitted your application for admission into the online MPA/MTAX program yet.  The earlier you submit your application, the earlier you receive your admission decision and the better chance you have of getting into the classes you need. </p>

<p>Your application must be submitted by the semester deadline in which you plan to enroll:</p>

<p>
    Fall semester: <b>August 1st</b><br/>
    Spring semester: <b>December 1st</b><br/>
    Summer semester: <b>May 15th</b>
</p>

<p>Students must complete the process for <a href="https://online.msstate.edu/mtpa/admissions-process/" title="Graduate Admission Process for the MTPA programs">Classified Admission</a> online.  Download the <a href="https://online.msstate.edu/files/pdf/MPA-MTAX-Application-checklist.pdf" title="Application Checklist PDF">application checklist</a> to ensure that you have submitted the required documents for full admission into the MPA/MTAX program. 
<p>Thank you for considering Mississippi State for your online degree. Please let me know if you have any specific questions.</p>
<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.sclardy')
@endsection

@section('apply')
	@include('common.apply')
@endsection