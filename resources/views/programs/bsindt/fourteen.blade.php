@extends('layouts.mjml')

@section('content')
<h3>Day 14 - Subject: Meet your team! </h3>

<p>At Mississippi State University you have a team who will support you in your pursuit of your INDT degree.</p>
<table>
	<tbody>
		<tr>
			<td class="divider" style="width: 50%;">
				<img src="https://goto.msstate.edu/www/images/Distance/bsindt/bray.jpg"/>
			</td>
            <td class="divider" style="text-align: center; width: 50%;">
				<b>Dr. Marty Bray</b><br/>
				Industrial Tech - Department head<br/>
				<a href="mailto:mbray@colled.mssstate.edu">mbray@colled.mssstate.edu</a><br/>
				662.325.2281
			</td>
		</tr>
		<tr>
			<td class="divider" style="width: 50%;">
				<img src="https://goto.msstate.edu/www/images/Distance/bsindt/dale.jpg"/>
			</td>
            <td class="divider" style="text-align: center; width: 50%;">
				<b>Jonathon Dale</b><br/>
				Industrial Tech - Instructor<br/>
				<a href="mailto:jwd43@msstate.edu">jwd43@msstate.edu</a><br/>
				662.325.0230
			</td>
		</tr>
		<tr>
			<td class="divider" style="width: 50%;">
				<img src="https://goto.msstate.edu/www/images/Distance/bsindt/giordano.png"/>
			</td>
            <td class="divider" style="text-align: center; width: 50%;">
				<b>Mickey Giordano</b><br/>
				Industrial Tech - Instructor<br/>
				<a href="mailto:mgiordano@colled.msstate.edu">mgiordano@colled.msstate.edu</a><br/>
				662.325.1610
			</td>
		</tr>
		<tr>
			<td class="divider" style="width: 50%;">
				<img src="https://goto.msstate.edu/www/images/Distance/bsindt/wyatt.png"/>
			</td>
            <td class="divider" style="text-align: center; width: 50%;">
				<b>Dr. John Wyatt</b><br/>
				Industrial Tech - Associate Professor<br/>
				<a href="mailto:wyatt@colled.msstate.edu">wyatt@colled.msstate.edu</a><br/>
				662.325.7257
			</td>
		</tr>
		<tr>
			<td class="divider" style="width: 50%;">
				<img src="https://goto.msstate.edu/www/images/Distance/staff/anusha_rijal.jpg"/>
			</td>
            <td class="divider" style="text-align: center; width: 50%;">
				<b>Anusha Rijal</b><br/>
				Distance Coordinator<br/>
				<a href="mailto:a.rijal@msstate.edu">a.rijal@msstate.edu</a><br/>
				662.325.8876
			</td>
		</tr>
	</tbody>
</table>

<p>We are here to help and look forward to working with you!</p>
<p>Thanks,</p>
@endsection

@section('signature')
	@include('signatures.arijal')
@endsection

@section('apply')
	@include('common.apply')
@endsection