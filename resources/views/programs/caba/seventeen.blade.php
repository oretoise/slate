@extends('layouts.mjml')

@section('content')
<h3>Day 17 - Subject: Meet your Applied Behavior Analysis (ABA) certificate program team!</h3>
<p>Dear @@{{First}},</p>

<p>Here at Mississippi State University, you have a team of staff who are here to support you in 
your pursuit of your degree. Meet your team!</p>
<b></b><br/>
	<i></i><br/>
	<br/>
    
<table>
    <tbody>
        <tr>
            <td class="divider staff" style="text-align: center; width: 30%;">
                <b>Hallie Smith, PhD, BCBA-D</b><br/>
                <i>Assistant Professor, Program Coordinator, Online Coordinator/Advisor</i><br/>
                Counseling, Ed Psych, & Foundations<br/>
                (E): <a href="mailto:hms238@msstate.edu">hms238@msstate.edu</a>
            </td>
		</tr>
		<tr>
            <td class="divider staff">
                <img src="https://goto.msstate.edu/www/images/Distance/staff/valerie_tate.png">
            </td>
            <td class="divider staff" style="text-align: center; width: 30%;">
                <b>Valerie Tate</b><br/>
                <i>Program Coordinator</i><br/>
                Center for Distance Education<br/>
                (E): <a href="mailto:v.tate@msstate.edu">v.tate@msstate.edu</a><br/>
                (P): 662.325.8876<br/>
                (F): 662.325.2657
            </td>
        </tr>
    </tbody>
</table>

<p>We are here to help throughout your academic career!</p>
<p>Thank you,</p>
@endsection

@section('signature')
	@include('signatures.vtate')
@endsection

@section('apply')
	@include('common.apply')
@endsection