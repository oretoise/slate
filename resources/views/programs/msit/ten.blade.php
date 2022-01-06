@extends('layouts.mjml')

@section('content')
<h3>Day 10 - Subject: Meet your team!</h3>
<p>Dear @@{{First}},</p>

<p>Here are Mississippi State University, you have a team of staff to support you in the pursuit of your MSIT degree.</p>

<table>
    <tbody>
        <tr>
            <td class="divider staff">
                <img src="https://goto.msstate.edu/www/images/Distance/bsindt/wyatt.jpg" />
            </td>
            <td class="divider staff" style="text-align: center;">
                <b>Dr. Sang Joon Lee</b><br/>
                <i>Graduate Coordinator - Master of Science Instructional Technology</i><br/>
                <a href="mailto:slee@colled.msstate.edu">slee@colled.msstate.edu </a><br/>
                (P): 662.325.7599
            </td>
        </tr>
        <tr>
            <td class="divider staff">
                <img src="https://goto.msstate.edu/www/images/Distance/staff/samantha_clardy.png" />
            </td>
            <td class="divider staff" style="text-align: center;">
                <b>Ms. Samantha Clardy</b><br/>
                <i>Distance Coordinator</i><br/>
                <a href="mailto:s.clardy@msstate.edu">s.clardy@msstate.edu</a><br/>
                (P): 662.325.9092
            </td>
        </tr>
    </tbody>
</table>

<p>We are here to help throughout your academic career, and we look forward to working with you!</p>

<p>Thank you,</p>
@endsection

@section('signature')
	@include('signatures.sclardy')
@endsection

@section('apply')
	@include('common.apply')
@endsection