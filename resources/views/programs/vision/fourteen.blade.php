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
                <img src="https://goto.msstate.edu/www/images/Distance/programs/vision/sylvia_stinson-perez.jpg">
            </td>
            <td class="divider staff" style="text-align: center;">
                <b>Sylvia Stinson-Perez</b><br/>
                NRTC on Blindness and Low Vision<br/>
                Project Director<br/>
                <a href="mailto:ssp258@msstate.edu">ssp258@msstate.edu</a><br/>
                (P): 662.325.2001
            </td>
        </tr>
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
                <img src="https://goto.msstate.edu/www/images/Distance/staff/samantha_clardy.png">
            </td>
            <td class="divider staff" style="text-align: center;">
                <b>Ms. Samantha Clardy</b><br/>
                Center for Distance Education<br/>
                Distance Coordinator<br/>
                <a href="mailto:s.clardy@msstate.edu">s.clardy@msstate.edu</a><br/>
                (P): 662.325.9092
            </td>
        </tr>
    </tbody>
</table>
<p>We'll be glad to assist you with answering any other questions about the Vision Specialist certificate program.  We're only a phone call or email away!</p>
<p>Thanks,</p>
@endsection

@section('signature')
	@include('signatures.sclardy')
@endsection

@section('apply')
	@include('common.apply')
@endsection