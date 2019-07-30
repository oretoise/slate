@extends('layouts.mjml')
@section('content')
<h3>Day 40 - Subject: Apply Now!</h3>
<p>Dear *|FNAME|*,</p>
<p>
    <img class="img-right" src="https://goto.msstate.edu/www/images/Distance/programs/agriculture/agri_2.png"/>
    Have you submitted your application for admission into the online Master of Agriculture with a concentration in Animal and Dairy Sciences program yet?  The earlier you submit your application, the better chance you have of getting into the classes you need.
</p>
<p>Your application must be submitted by the semester deadline in which you plan to enroll:</p>
<p>
    Fall semester: <b>August 1st</b><br/>
    Spring semester: <b>December 1st</b><br/>
    Summer semester: <b>May 15th</b>
</p>
<p>Download the <a href="https://goo.gl/EieZpS">application checklist</a> to ensure that you have submitted the required documents for full admission into the AGRI program.
</p><p>Thank you for considering Mississippi State for your online degree. Please let me know if you have any specific questions.</p>
<p>All the best,</p>
@endsection

@section('signature')
    @include('signatures.dknox')
@endsection

@section('apply')
    @include('common.apply')
@endsection
