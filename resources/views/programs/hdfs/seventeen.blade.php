@extends('layouts.mjml')

@section('content')
<h3>Day 17 - Subject: Meet your team!</h3>

<p>Dear @@{{First}},</p>

<p>At Mississippi State University, you have a team of staff who will support you in your pursuit of your degree.</p>

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

<p>Please let me know if you have any questions!</p>
<p>Thank you,</p>
@endsection

@section('signature')
	@include('signatures.mwolfe')
@endsection

@section('apply')
	@include('common.apply')
@endsection