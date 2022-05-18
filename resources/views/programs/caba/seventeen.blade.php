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
            <td>
                <img src="https://goto.msstate.edu/www/images/Distance/staff/halliesmith.jpg" />
            </td>
            <td class="divider staff" style="text-align: center; width: 50%;">
                <b>Hallie Smith, PhD, BCBA-D</b><br/>
                <i>Assistant Professor, Program Coordinator, Online Coordinator/Advisor</i><br/>
                Counseling, Ed Psych, & Foundations<br/>
                (E): <a href="mailto:hms238@msstate.edu">hms238@msstate.edu</a>
            </td>
		</tr>
		<tr>
            <td class="divider staff">
                <img src="https://goto.msstate.edu/www/images/Distance/staff/anusha_rijal.jpg" />
            </td>
            <td class="divider staff" style="text-align: center; width: 50%;">
            <b><span id="coordinator_name">Anusha Rijal</span></b><br/>
            <i>Online Program Coordinator</i><br/>
            Center for Distance Education<br/>
            Mississippi State University<br/>
            662.325.8876<br/>
            <a href="mailto:a.rijal@msstate.edu"><span id="coordinator_email">a.rijal@msstate.edu</span></a><br/>
            </td>
        </tr>
    </tbody>
</table>

<p>We are here to help throughout your academic career!</p>
<p>Thank you,</p>
@endsection

@section('signature')
	@include('signatures.arijal')
@endsection

@section('apply')
	@include('common.apply')
@endsection