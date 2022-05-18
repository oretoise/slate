@extends('layouts.mjml')

@section('content')
<h3>Day 14 - Subject: Meet your VSC team!</h3>
<p>Dear @@{{First}},</p>
<p>Meet the <b>Vision Specialist Program Staff and Online Coordinator!</b></p>
<p>We'd love to get to know you.  What questions do you have about our certificate program?</p>
<table>
    <tbody>
        <tr>
            <td class="divider staff">
                <img src="https://goto.msstate.edu/www/images/Distance/programs/vision/ashelton.png">
            </td>
            <td class="divider staff" style="text-align: center;">
                <b>Angela Shelton</b><br/>
                NRTC on Blindness and Low Vision<br/>
                Coordinator<br/>
                <a href="mailto:ashelton@colled.msstate.edu">ashelton@colled.msstate.edu</a><br/>
                (P): 662.809.0230
            </td>
        </tr>
        <tr>
            <td class="divider staff">
            <img src="https://goto.msstate.edu/www/images/Distance/staff/anusha_rijal.jpg">
            </td>
            <td class="divider staff" style="text-align: center;">
                <b>Anusha Rijal</b><br/>
                Center for Distance Education<br/>
                Distance Coordinator<br/>
                <a href="mailto:a.rijal@msstate.edu">a.rijal@msstate.edu</a><br/>
                (P): 662.325.8876
            </td>
        </tr>
    </tbody>
</table>
<p>We'll be glad to assist you with answering any other questions about the Vision Specialist certificate program.  We're only a phone call or email away!</p>
<p>Thanks,</p>
@endsection

@section('signature')
	@include('signatures.arijal')
@endsection

@section('apply')
	@include('common.apply')
@endsection