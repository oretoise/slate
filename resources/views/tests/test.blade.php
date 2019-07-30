@extends('layouts.mjml_single')
@section('content')
<h3>Day 40 - Subject: Apply Now!</h3>
<p>Dear *|FNAME|*,</p>
<p>
    <img class="img-right" src="https://gallery.mailchimp.com/08645bc06c5353fea3c46c46c/images/b10d16fb-929c-4da9-a078-03ea7a918365.png"/>
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
    <b>Daphne Knox</b><br/>
    <i>Program Coordinator</i><br/>
    Mississippi State University<br/>
    662.325.0658<br/>
    <a href="mailto:dknox@distance.msstate.edu">dknox@distance.msstate.edu</a>
@endsection

@section('apply')
    <a alias="apply_button" conversion="false" href="https://goo.gl/ky1CrT">
    <img alt="Apply now!" border="0" mdid="9038c91d-e82d-4e03-a203-dd83f4a7ca62" src="https://gallery.mailchimp.com/08645bc06c5353fea3c46c46c/images/ffa56c4c-2485-42a1-b64c-0117a7873a74.png" st="M" style="border-color: #000000; margin: 0px; border-radius: 10px;" title="Apply now!"/></a>
@endsection
