@extends('layouts.mjml')

@section('content')
<h3>Day 10 - Subject: Meet your team!</h3>
<p>Dear @@{{First}},</p>

<p>Here at Mississippi State University, you have a team of staff to support you in the pursuit of your SEED degree.</p>

<table>
    <tbody>
        <tr>
            <td class="divider staff">
                <img src="https://goto.msstate.edu/www/images/Distance/programs/seed/missy_hopper.png">
            </td>
            <td class="divider staff" style="text-align: center;">
                <b>Dr. Missy Hopper</b><br/>
                <i>SEED Grad Coordinator</i><br/>
                <a href="mailto:pfh7@colled.msstate.edu">pfh7@colled.msstate.edu </a><br/>
                (P): 662.325.7118
            </td>
        </tr>
        <tr>
            <td class="divider staff">
            </td>
            <td class="divider staff" style="text-align: center;">
                <b>Ms. Tamra Stevenson</b><br/>
                <i>SEED Grad Office Assoc.</i><br/>
                <a href="mailto:tstevenson@colled.msstate.edu">tstevenson@colled.msstate.edu </a><br/>
                (P): 662.325.3703
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
                (P): 662.325.8876
            </td>
        </tr>
    </tbody>
</table>
@endsection

@section('signature')
	@include('signatures.arijal')
@endsection

@section('apply')
	@include('common.apply')
@endsection