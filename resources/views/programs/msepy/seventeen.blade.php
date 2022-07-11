@extends('layouts.mjml')

@section('content')
<h3>Day 17 - Subject: Meet your MS EPY program team!</h3>
<p>Dear @@{{First}},</p>

<p>Here at Mississippi State University, you have a team of staff who are here to support you in 
your pursuit of your degree. Meet your team!</p>

<table>
    <tbody>
        <tr>
            <td class="divider staff">
                <img src="https://goto.msstate.edu/www/images/Distance/staff/hallie_smith.jpg" />
            </td>
            <td class="divider staff" style="text-align: center;">
                <b>Hallie Smith, PhD, BCBA-D</b><br/>
                <i>Assistant Professor, Program Coordinator, Online Coordinator/Advisor</i><br/>
				Counseling, Ed Psych, & Foundations<br/>
                <a href="mailto:hms238@msstate.edu">hms238@msstate.edu</a>
            </td>
        </tr>
        <tr>
            <td class="divider staff">
                <img src="https://goto.msstate.edu/www/images/Distance/staff/anusha_rijal.jpg">
            </td>
            <td class="divider staff" style="text-align: center;">
                <b>Anusha Rijal</b><br/>
                <i>Online Program Coordinator</i><br/>
				Center for Distance Education
                (P): 662.325.8876<br/>
                <a href="mailto:a.rijal@msstate.edu">a.rijal@msstate.edu</a><br/>
            </td>
        </tr>
    </tbody>
</table>

<p>We are here to help throughout your academic career!</p>
@endsection

@section('signature')
	@include('signatures.arijal')
@endsection

@section('apply')
	@include('common.apply')
@endsection