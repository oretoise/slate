@extends('layouts.mjml')

@section('content')
<h3>Day 17 - Subject: Your Points of Contact for the Online MPA/MTAX Program!</h3>
<p>Dear @@{{First}},</p>

<table>
    <tbody>
        <tr>
            <td class="divider staff">
                <img src="https://goto.msstate.edu/www/images/Distance/staff/kwalker.png">
            </td>
            <td class="divider staff" style="text-align: center;">
                <b>Kelly Walker</b><br/>
                <i>Clinical Assistant Professor and Graduate Coordinator</i><br/>
                Adkerson School of Accounting<br/>
                <a href="mailto:kwalker@business.msstate.edu">kwalker@business.msstate.edu</a>
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

<p>Kelly and I are here to assist you with any questions you have regarding the program.  Let us know how we can help you!</p>
<p>Sincerely,</p>
@endsection

@section('signature')
	@include('signatures.sclardy')
@endsection

@section('apply')
	@include('common.apply')
@endsection