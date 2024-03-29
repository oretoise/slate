@extends('layouts.mjml')

@section('content')
<h3>Day 10 - Subject: Meet your team!</h3>

<p>Dear @@{{First}},</p>

<p>At Mississippi State University, you have a team of staff who will support you in your pursuit of your degree.</p>

<table>
    <tbody>
    <tr>
            <td class="divider staff">
                <img alt="Lily Hudson" src="https://goto.msstate.edu/www/images/Distance/staff/lily_hudson.png">
            </td>
            <td class="divider staff" style="text-align: left;">
				<p><b>Lily Hudson</b><br>
				Online Coordinator<br>
				Center for Distance Education<br>
				(E): <a href="mailto:lily.hudson@msstate.edu">lily.hudson@msstate.edu</a><br>
				(P): 662.325.1559</p>
			</td>
        </tr>
		<tr>
            <td class="divider staff">
                <img src="https://goto.msstate.edu/www/images/Distance/staff/Stanisevsk.png">
            </td>
            <td class="divider staff" style="text-align: left;">
                <p>Dr. Dragan Stanisevski is an Associate Professor and Graduate Coordinator in the Department of Political Science and Public Administration at Mississippi State University. His research focuses on issues of multiculturalism and diversity in public administration and public policy, administrative and political theories, democratic governance, comparative public administration, and public budgeting and finance..</p>
                <p>He has authored a number of journal articles that have appeared in Administration & Society, Administrative Theory & Praxis, Critical Policy Studies, Journal of Public Budgeting, Accounting, and Financial Management, International Journal of Organization Theory & Behavior, Public Integrity, and Public Personnel Management. He has also published book chapters published by academic presses such as Oxford University Press and DJøF   Publishing, Copenhagen, Denmark and encyclopedia entries published by Springer.</p>
            </td>
        </tr>
    </tbody>
</table>

<p>We look forward to working with you!</p>
<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.lhudson')
@endsection

@section('apply')
	@include('common.apply')
@endsection