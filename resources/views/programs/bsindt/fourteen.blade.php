@extends('layouts.responsive')

@section('content')
<h3>Day 14 - Subject: </h3>

<table>
	<tbody>
		<tr>
			<td style="width: 50%; padding-right: 10px;">
				<img src="https://gallery.mailchimp.com/08645bc06c5353fea3c46c46c/images/8cfb3f2d-eba2-419b-81cb-9d374144ac1f.jpg" style="max-height: 220px; width: auto; float: left; padding-right: 10px;"/>
				<b>Dr. Trey Martindale</b><br/>
				ISWD - Department head<br/>
				662.325.7258
			</td>
			<td style="width: 50%;">
				<img src="https://gallery.mailchimp.com/08645bc06c5353fea3c46c46c/images/334950b6-3f5e-42e8-a17f-1fcf91f03dbe.jpg" style="max-height: 220px; width: auto; float: left; padding-right: 10px;"/>
				<b>Dr. James Adams</b><br/>
				ISWD – Professor<br/>
				662.325.7563
			</td>
		</tr>
		<tr>
			<td style="width: 50%; padding-right: 10px;">
				<img src="https://gallery.mailchimp.com/08645bc06c5353fea3c46c46c/images/2289624d-af52-4461-8c2b-41c2ff9e2abe.jpg" style="max-height: 220px; width: auto; float: left; padding-right: 10px;"/>
				<b>Dr. John Wyatt</b><br/>
				ISWD – Associate Professor/Advisor<br/>
				662.325.7257
			</td>
			<td style="width: 50%;">
				<img src="https://gallery.mailchimp.com/08645bc06c5353fea3c46c46c/images/fdf69d4b-2cf4-47c4-9e6f-0f278f179c4f.jpg" style="max-height: 220px; width: auto; float: left; padding-right: 10px;"/>
				<b>Jonathon Dale</b><br/>
				ISWD – Instructor/Advisor<br/>
				662.809.0230
			</td>
		</tr>
		<tr>
			<td style="width: 50%; padding-right: 10px;">
				<img src="https://gallery.mailchimp.com/08645bc06c5353fea3c46c46c/images/8b09fb53-8611-40f4-a6d3-909fdae4c1fe.jpg" style="max-height: 220px; width: auto; float: left; padding-right: 10px;"/>
				<b>Mickey Giordano</b><br/>
				ISWD – Instructor/Advisor<br/>
				662.325.7563
			</td>
			<td style="width: 50%;">
				<img src="https://gallery.mailchimp.com/08645bc06c5353fea3c46c46c/images/87473156-b2ad-4814-8834-51840718965d.jpg" style="max-height: 220px; width: auto; float: left; padding-right: 10px;"/>
				<b>Valerie Tate</b><br/>
				Distance Coordinator<br/>
				662.325.8876
			</td>
		</tr>
	</tbody>
</table>
@endsection

@section('signature')
	@include('signatures.vtate')
@endsection

@section('apply')
	@include('common.apply')
@endsection