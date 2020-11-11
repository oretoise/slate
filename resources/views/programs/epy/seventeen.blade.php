@extends('layouts.mjml')

@section('content')
<h3>Day 17 - Subject: Meet Your Team</h3>
<p>Dear @@{{First}},</p>

<p>Here at Mississippi State University, you have a team of staff to support you in the pursuit of your Master of Science in Educational Leadership with a concentration in School Administration (EDLD-EDLS).</p>

<table>
    <tbody>
        <tr>
            <td class="divider staff">
                <img src="https://goto.msstate.edu/www/images/Distance/staff/dgainer.jpg">
            </td>
            <td class="divider staff" style="text-align: center;">
                <b>Donna Gainer, PhD</b><br/>
                <i>Online Coordinator/Advisor</i><br/>
                <a href="mailto:browning@colled.msstate.edu">browning@colled.msstate.edu </a>
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

<p>Dr. Gainer and I are here to help. We look forward to working with you!</p>
@endsection

@section('signature')
	@include('signatures.vtate')
@endsection

@section('apply')
	@include('common.apply')
@endsection