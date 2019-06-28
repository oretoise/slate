@extends('layouts.responsive')

@section('content')
<h3>Day 17 - Subject: Meet Your Team</h3>
<p>Dear @{{First}},</p>

<p>Here at Mississippi State University, you have a team of staff to support you in the pursuit of your Master of Science in Educational Leadership with a concentration in School Administration (EDLD-EDLS)</p>

<table>
    <tbody>
        <tr>
            <td class="divider staff">
                <img src="https://goto.msstate.edu/www/images/Distance/edld/mcmullan.png">
            </td>
            <td class="divider staff" style="text-align: center;">
                <b>Dr. Leigh Ann McMullan</b><br/>
                <i>Grad Coordinator/Advisor</i><br/>
                <a href="mailto:lmcmullan@colled.msstate.edu">lmcmullan@colled.msstate.edu </a><br/>
                (P): 662.325.7110<br/>
            </td>
        </tr>
        <tr>
            <td class="divider staff">
                <img src="https://goto.msstate.edu/www/images/Distance/staff/valerie_tate.png">
            </td>
            <td class="divider staff" style="text-align: center;">
                <b>Ms. Valerie Tate</b><br/>
                <i>Distance Coordinator </i><br/>
                <a href="mailto:v.tate@msstate.edu">v.tate@msstate.edu</a><br/>
                (P): 662.325.8876<br/>
            </td>
        </tr>
    </tbody>
</table>

<p>We'd love to hear from you.  Contact us with any question you may have about the program. We look forward to working with you!</p>
<p>Thank you,</p>
@endsection

@section('signature')
	@include('signatures.vtate')
@endsection

@section('apply')
	@include('common.apply')
@endsection