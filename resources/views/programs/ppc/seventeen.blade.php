@extends('layouts.mjml')

@section('content')
<h3>Day 17 - Subject: Meet your Public Procurement Certificate team!</h3>
<p>Dear @@{{First}},</p>

<p>At Mississippi State University, you have a team of staff who will support you in your pursuit of your degree.</p>
<table style="width: 450px; margin: auto;">
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
    </tbody>
</table>


<p>Please let me know if you have any questions!</p>
@endsection

@section('signature')
	@include('signatures.lhudson')
@endsection

@section('apply')
	@include('common.apply')
@endsection