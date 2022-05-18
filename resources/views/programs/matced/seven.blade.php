@extends('layouts.mjml')

@section('content')
<h3>Day 7 - Subject: Meet your MATCED team!</h3>
<p>Dear @@{{First}},</p>

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
                <a href="mailto:cdleadership@colled.msstate.edu">cdleadership@colled.msstate.edu</a><br/>
                (P): 662.325.7066<br/>
            </td>
        </tr>
        <tr>
            <td class="divider staff">
                <img src="https://goto.msstate.edu/www/images/Distance/staff/anusha_rijal.jpg">
            </td>
            <td class="divider staff" style="text-align: center;">
                <b>Anusha Rijal</b><br/>
                <i>Distance Coordinator </i><br/>
                <a href="mailto:a.rijal@msstate.edu">a.rijal@msstate.edu</a><br/>
                (P): 662.325.8876<br/>
            </td>
        </tr>
    </tbody>
</table>

<p>Dr. King and I are here to help you throughout your career.  Contact us with any questions. We look forward to getting to know you!</p>
<p>Thank you,</p>
@endsection

@section('signature')
	@include('signatures.arijal')
@endsection

@section('apply')
	@include('common.apply')
@endsection