@extends('layouts.mjml')

@section('content')
<h3>Day 10 - Subject: Meet your Data Science Pedagogy Certificate program team! </h3>

<p>Dear @@{{First}},</p>

<p>At Mississippi State University, you have a team of staff who will support you in your pursuit of your degree.</p>

<table>
    <tbody>
        <tr>
            <td class="divider staff">
                <img alt="Lynn Taylor" src="https://goto.msstate.edu/www/images/Distance/staff/taylor.png">
            </td>
            <td class="divider staff" style="text-align: center;">
                <p><b>Lynn Taylor</b><br>
				Academic Coordinator<br>
				(E): <a href="mailto:lynn@datascience.msstate.edu">lynn@datascience.msstate.edu</a><br>
				(P): 662.325.3168</p>
            </td>
        </tr>
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
    </tbody>
</table>

<p>We look forward to working with you!</p>
@endsection

@section('signature')
	@include('signatures.lhudson')
@endsection

@section('apply')
	@include('common.apply')
@endsection