@extends('layouts.mjml')

@section('content')
<h3>Day 13 - Subject: Meet your coordinator!</h3>

<p>Dear @@{{First}},</p>

<p>As your coordinator for the online Master of Science in Forestry, I'm here to help you with all your non-academic needs! Here's a little bit about me:</p>

<table>
    <tbody>
    <tr>
            <td class="divider" style="width: 50%;">
                <img src="https://goto.msstate.edu/www/images/Distance/staff/wolfe.png">
            </td>
            <td class="divider" style="text-align: center; width: 50%;">
                <b>Mindy Wolfe</b><br/>
                <i>Recruitment Coordinator</i><br/>
                Center for Distance Education<br/>
                <a href="mailto:mindy.wolfe@msstate.edu">mindy.wolfe@msstate.edu</a><br/>
                (P): 662-325-8545
            </td>
        </tr>
    </tbody>
</table>

<p>I am here to help you with any questions you have regarding the program.  Let me know if I can be of any assistance.</p>

<p>Thank you,</p>

@endsection

@section('signature')
	@include('signatures.mwolfe')
@endsection

@section('apply')
	@include('common.apply')
@endsection