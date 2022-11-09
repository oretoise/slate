@extends('layouts.mjml')

@section('content')
<h3>Day 14 - Subject: Meet your team! </h3>

<p>At Mississippi State University you have a team who will support you in your pursuit of your INDT degree.</p>
<table>
	<tbody>
		<tr>
			<td class="divider" style="width: 50%;">
				<img src="https://goto.msstate.edu/www/images/Distance/bsindt/threet.jpg"/>
			</td>
            <td class="divider" style="text-align: center; width: 50%;">
				<b>Lara Threet</b><br/>
				Industrial Tech - Advisor<br/>
				<a href="mailto:lthreet@colled.msstate.edu">lthreet@colled.msstate.edu</a><br/>
				662.325.7253
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

<p>Lara and I are here to help. We look forward to working with you!</p>
<p>Thanks,</p>
@endsection

@section('signature')
	@include('signatures.arijal')
@endsection

@section('apply')
	@include('common.apply')
@endsection