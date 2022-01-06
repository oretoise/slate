@extends('layouts.mjml')

@section('content')
<h3>Day 7 - Subject: Meet your team!</h3>
<p>Dear @@{{First}},</p>
<p>At Mississippi State University, you have a team of staff who will support you in your pursuit of an Elementary Education degree.</p>

<table style="width: 450px; margin: auto;">
    <tbody>
        <tr>
            <td class="divider" style="width: 50%;">
                <img src="https://goto.msstate.edu/www/images/Distance/staff/samantha_clardy.png">
            </td>
            <td class="divider" style="text-align: center; width: 50%;">
                <b>Samantha Clardy</b><br/>
                <i>Online Program Coordinator</i><br/>
                Center for Distance Education<br/>
				(P): 662-325-9092
                <a href="mailto:s.clardy@msstate.edu">s.clardy@msstate.edu</a>
            </td>
        </tr>
        <tr>
            <td class="divider"></td>
            <td class="divider" style="text-align: center; width: 50%;">
                <br/>
                <b>Michelle Gaither</b><br/>
                ELEM Coordinator / Advisor<br/>
                (P): 662-325-7128
                <a href="mailto:elemonline@colled.msstate.edu">elemonline@colled.msstate.edu</a>
            </td>
        </tr>
    </tbody>
</table>

<p>Michelle and I are here to help.  We look forward to working with you!</p>
<p>Sincerely,</p>
@endsection

@section('signature')
	@include('signatures.sclardy')
@endsection

@section('apply')
	@include('common.apply')
@endsection