@extends('layouts.mjml')

@section('content')
<h3>Day 13 - Subject: Meet your coordinator!</h3>

<p>Dear @@{{First}},</p>

<p>As your coordinator for the online Master of Science in Forestry, I'm here to help you with all your non-academic needs! Here's a little bit about me:</p>

<table>
    <tbody>
        <tr>
            <td class="divider staff">
                <img src="https://goto.msstate.edu/www/images/Distance/staff/daphne_knox.png">
            </td>
            <td class="divider staff" style="text-align: center; width: 30%;">
                <b>Daphne Knox</b><br/>
                <i>Program Coordinator</i><br/>
                Center for Distance Education<br/>
                <a href="mailto:daphne.knox@msstate.edu">daphne.knox@msstate.edu</a><br/>
                (P): 662.325.0658<br/>
                (F): 662.325.2657
            </td>
            <td class="divider staff" style="text-align: left;">
                Daphne holds a Bachelor of Arts in Political Science and a Master of Public Policy and Administration from Mississippi State University.  In her leisure, Daphne enjoys spending time with her family, playing tennis, and reading.
            </td>
        </tr>
    </tbody>
</table>

<p>I am here to help you with any questions you have regarding the program.  Let me know if I can be of any assistance.</p>

<p>Thank you,</p>

@endsection

@section('signature')
	@include('signatures.dknox')
@endsection

@section('apply')
	@include('common.apply')
@endsection