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
                <img src="https://goto.msstate.edu/www/images/Distance/staff/valerie_tate.png" />
            </td>
            <td class="divider staff" style="text-align: center;">
                <b>Ms. Valerie Tate</b><br/>
                <i>Distance Coordinator </i><br/>
                <a href="mailto:v.tate@msstate.edu">v.tate@msstate.edu</a><br/>
                (P): 662.325.8876
            </td>
        </tr>
    </tbody>
</table>

<p>We are here to help throughout your academic career, and we look forward to working with you!</p>

<p>Thank you,</p>
@endsection

@section('signature')
	@include('signatures.vtate')
@endsection

@section('apply')
	@include('common.apply')
@endsection