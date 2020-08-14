@extends('layouts.mjml')

@section('content')
<h3>Day 17 - Subject: How much will your online certificate cost?</h3>

<p>Dear @@{{First}},</p>
<p>
    <a href="https://youtu.be/_z2sKz5yhwk"><img class="img-right" src="https://goto.msstate.edu/www/images/Distance/Email%20Template/tuition_fees_video.png"/></a>
    The number one concern for most students is affordability. "How much is this going to cost?"
</p>

<p>
    Regardless of your location, <b>ALL</b> online students pay in-state tuition!
</p>

<p>
    This short <a href="https://youtu.be/_z2sKz5yhwk">video</a> shows you how to find current cost information.
</p>

<p>
    You can also follow these steps to find online tuition and fees:

    <ol>
        <li>Visit the <a href="https://controller.msstate.edu/accountservices/tuition/">Tuition/Fees</a> page.</li>
        <li>Select the <b>Online Education</b> tab.</li>
        <li>Refer to the <b>UNDERGRADUATE</b> or <b>GRADUATE</b> table depending on your classification.</li>
        <li>Click <b>See Here for Online Fees</b>.  Please review the current semester fee table to view any additional fees that might be associated with the courses you may take.*</li>
    </ol>
</p>

<p>
    Additional information about <a href="https://online.msstate.edu/{{ $program }}/financial-aid/">financial aid</a>, <a href="https://online.msstate.edu/military-assistance/">military/veteran educational benefits</a> can be found on our <a href="https://online.msstate.edu/{{ $program}}">website</a>.
</p>

<p>
    If you have any questions after reviewing this information, don't hesitate to contact me.
</p>

<p>
    All the best,
</p>
@endsection

@section('signature')
	@include('signatures.dknox')
@endsection

@section('apply')
	@include('common.apply')
@endsection