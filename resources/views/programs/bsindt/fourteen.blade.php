@extends('layouts.responsive')

@section('content')
<h3>Day 14 - Subject: Meet your team! </h3>

<p>At Mississippi State University you have a team who will support you in your pursuit of your INDT degree.</p>
<table>
	<tbody>
		<tr>
			<td class="divider" style="width: 50%;">
				<img src="https://goto.msstate.edu/www/images/Distance/bsindt/martindale.jpg"/>
			</td>
            <td class="divider" style="text-align: center; width: 50%;">
				<b>Dr. Trey Martindale</b><br/>
				ISWD - Department head<br/>
				662.325.7258
			</td>
		</tr>
		<tr>
			<td class="divider" style="width: 50%;">
				<img src="https://goto.msstate.edu/www/images/Distance/bsindt/adams.jpg"/>
			</td>
            <td class="divider" style="text-align: center; width: 50%;">
				<b>Dr. James Adams</b><br/>
				ISWD – Professor<br/>
				662.325.7563
			</td>
		</tr>
		<tr>
			<td class="divider" style="width: 50%;">
				<img src="https://goto.msstate.edu/www/images/Distance/bsindt/wyatt.jpg"/>
			</td>
            <td class="divider" style="text-align: center; width: 50%;">
				<b>Dr. John Wyatt</b><br/>
				ISWD – Associate Professor/Advisor<br/>
				662.325.7257
			</td>
		</tr>
		<tr>
			<td class="divider" style="width: 50%;">
				<img src="https://goto.msstate.edu/www/images/Distance/bsindt/dale.jpg"/>
			</td>
            <td class="divider" style="text-align: center; width: 50%;">
				<b>Jonathon Dale</b><br/>
				ISWD – Instructor/Advisor<br/>
				662.809.0230
			</td>
		</tr>
		<tr>
			<td class="divider" style="width: 50%;">
				<img src="https://goto.msstate.edu/www/images/Distance/bsindt/giordano.jpg"/>
			</td>
            <td class="divider" style="text-align: center; width: 50%;">
				<b>Mickey Giordano</b><br/>
				ISWD – Instructor/Advisor<br/>
				662.325.7563
			</td>
		</tr>
		<tr>
			<td class="divider" style="width: 50%;">
				<img src="https://goto.msstate.edu/www/images/Distance/staff/valerie_tate.png"/>
			</td>
            <td class="divider" style="text-align: center; width: 50%;">
				<b>Valerie Tate</b><br/>
				Distance Coordinator<br/>
				662.325.8876
			</td>
		</tr>
	</tbody>
</table>

<p>We are here to help and look forward to working with you!</p>
<p>Thanks,</p>
@endsection

@section('signature')
	@include('signatures.vtate')
@endsection

@section('apply')
	@include('common.apply')
@endsection