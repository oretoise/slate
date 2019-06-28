@extends('layouts.responsive')

@section('content')
<h3>Day 7 - Subject: Meet your MATCED team!</h3>
<p>Dear @{{First}},</p>

<p>Here at Mississippi State University, you have a team of staff to support you in the pursuit of your degree.</p>

<table>
    <tbody>
        <tr>
            <td class="divider staff">
                <img src="https://goto.msstate.edu/www/images/Distance/matced/stephanie_king.png">
            </td>
            <td class="divider staff" style="text-align: center;">
                <b>Dr. Stephanie King</b><br/>
                <i>Grad Coordinator/Advisor</i><br/>
                <a href="mailto:sking@colled.msstate.edu">sking@colled.msstate.edu </a><br/>
                (P): 662.325.7066<br/>
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

<p>Dr. King and I are here to help you throughout your career.  Contact us with any questions. We look forward to getting to know you!</p>
<p>Thank you,</p>
@endsection

@section('signature')
	@include('signatures.vtate')
@endsection

@section('apply')
	@include('common.apply')
@endsection