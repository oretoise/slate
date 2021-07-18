@extends('layouts.mjml')

@section('content')
<h3>Day 17 - Subject: Meet your PhD Instructional Systems and Workforce Development program team!</h3>
<p>Dear @@{{First}},</p>

<p>Here at Mississippi State University, you have a team of staff who are here to support you in 
your pursuit of your degree. Meet your team!</p>

<table>
    <tbody>
        <tr>
            <td class="divider staff">
            </td>
            <td class="divider staff" style="text-align: center;">
                <b>John Adams, PhD</b><br/>
                <i>Online Graduate Coordinator/Advisor</i><br/>
				Instructional Systems and Workforce Development
                <a href="mailto:jadams@colled.msstate.edu">jadams@colled.msstate.edu </a>
            </td>
        </tr>
        <tr>
            <td class="divider staff">
                <img src="https://goto.msstate.edu/www/images/Distance/staff/valerie_tate.png">
            </td>
            <td class="divider staff" style="text-align: center;">
                <b>Ms. Valerie Tate</b><br/>
                <i>Online Program Coordinator</i><br/>
				Center for Distance Education
                <a href="mailto:v.tate@msstate.edu">v.tate@msstate.edu</a><br/>
                (P): 662.325.8876<br/>
            </td>
        </tr>
    </tbody>
</table>

<p>Dr. Adams and I are here to help.  We look forward to working with you!</p>
@endsection

@section('signature')
	@include('signatures.vtate')
@endsection

@section('apply')
	@include('common.apply')
@endsection