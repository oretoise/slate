@extends('layouts.mjml')

@section('content')
<h3>Day 10 - Subject: Meet your team!</h3>

<p>Dear @@{{First}},</p>

<p>Here at Mississippi State University, you have a team of staff here to support you in the pursuit of your degree.</p>

<table>
    <tbody>
        <tr>
            <td class="divider staff">
                <img src="https://goto.msstate.edu/www/images/Distance/bba/Angelia Knight2019.jpg">
            </td>
            <td class="divider staff" style="text-align: center;">
                <b>Angelia Knight, PHR, SHRM-CP</b><br/>
                <i>Director, MBA Programs</i><br/>
                Mississippi State University<br/>
                <a href="mailto:aknight@business.msstate.edu">aknight@business.msstate.edu</a><br/>
                (P) 662.325.7281
            </td>
        </tr>
        <tr>
            <td class="divider staff">
                <img src="https://goto.msstate.edu/www/images/Distance/staff/samantha_clardy.png">
            </td>
            <td class="divider staff" style="text-align: center;">
                <b>Samantha Clardy</b><br/>
                <i>Online Program Coordinator</i><br/>
                Center for Distance Education<br/>
                <a href="mailto:sam103@msstate.edu">sam103@msstate.edu</a>
                (P): 662.325.9092<br/>
                (F): 662.325.2657                
            </td>
        </tr>
    </tbody>
</table>

<p>Angelia and I are here to help.  We look forward to working with you!</p>
<p>Sincerely,</p>
@endsection

@section('signature')
	@include('signatures.sclardy')
@endsection

@section('apply')
	@include('common.apply')
@endsection