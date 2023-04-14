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
                <img src="https://goto.msstate.edu/www/images/Distance/staff/francom.jpg" />
            </td>
            <td class="divider staff" style="text-align: center;">
                <b>Dr. Gregory M. Francom</b><br/>
                <i>Assistant Clinical Professor, Graduate Coordinator</i><br/>
				Instructional Systems and Workforce Development<br/>
                (P):  662-325-7499<br/>
                <a href="mailto:greg.francom@msstate.edu ">greg.francom@msstate.edu </a><br/>
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

<p>Dr. Adams and I are here to help.  We look forward to working with you!</p>
@endsection

@section('signature')
	@include('signatures.arijal')
@endsection

@section('apply')
	@include('common.apply')
@endsection