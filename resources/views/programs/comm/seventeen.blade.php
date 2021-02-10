@extends('layouts.mjml')

@section('content')
<h3>Day 17 - Subject: Meet your Communication program team!</h3>
<p>Dear @@{{First}},</p>
<p>Here at Mississippi State University, you have a team of staff who are here to support you in your pursuit of your degree. Meet your team!</p>

<table style="width: 450px; margin: auto;">
    <tbody>
        <tr>
            <td class="divider" style="width: 50%;">
                <img src="https://goto.msstate.edu/www/images/Distance/staff/kanthony.png">
            </td>
            <td class="divider" style="text-align: center; width: 50%;">
                <b>Kelli Anthony</b><br/>
                <i>Public Relations Online Academic Advisor</i><br/>
                Department of Communication<br/>
				Phone: 662-312-2649<br/>
                <a href="mailto:kanthony@comm.msstate.edu">kanthony@comm.msstate.edu</a>
            </td>
        </tr>
        <tr>
            <td class="divider" style="width: 50%">
                <img src="https://goto.msstate.edu/www/images/Distance/staff/hcrouch.png">
            </td>
            <td class="divider" style="text-align: center; width: 50%;">
                <b>Haylee Crouch</b><br/>
                Contact for Admissions/General Information<br/>
				<i>Academic Advising Coordinator</i><br/>
                Department of Communication<br/>
				Phone: 662-312-3779<br/>
                <a href="mailto:hcrouch@comm.msstate.edu">hcrouch@comm.msstate.edu</a>
            </td>
        </tr>
		<tr>
            <td class="divider" style="width: 50%">
                <img src="https://goto.msstate.edu/www/images/Distance/staff/mchancellor.png">
            </td>
            <td class="divider" style="text-align: center; width: 50%;">
                <b>Marian Montgomery Chancellor</b><br/>
				<i>Manager / Program Coordinator</i><br/>
                Center for Distance Education<br/>
				Phone: 662-325-0238<br/>
                <a href="mailto:marian.chancellor@msstate.edu">marian.chancellor@msstate.edu</a>
            </td>
        </tr>
    </tbody>
</table>

<p>We look forward to working with you!</p>
@endsection

@section('signature')
	@include('signatures.kanthony')
@endsection

@section('apply')
	@include('common.apply')
@endsection