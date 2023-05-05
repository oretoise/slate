@extends('layouts.mjml')

@section('content')
<h3>Day 17 - Subject: Meet your team!</h3>
<p>Dear @@{{First}},</p>

<p>Here at Mississippi State University, you have a team of staff who are here to support you in your pursuit of your degree. Meet your team!</p>

<table style="width: 450px; margin: auto;">
    <tbody>
        <tr>
            <td class="divider" style="width: 50%;">
				<img src="https://goto.msstate.edu/www/images/Distance/staff/kali_dunlap.png" />
			</td>
            <td class="divider" style="text-align: center; width: 50%;">
                <br/>
                <b>Kali Dunlap</b><br/>
                <i>BSIS Coordinator/Advisor</i><br/>
                Center for Distance Education<br/>
                <a href="mailto:k.dunlap@msstate.edu">k.dunlap@msstate.edu</a><br/>
                (P): 662-325-8029<br/>
                (F): 622-325-2657
            </td>
        </tr>
    </tbody>
</table>

<p>We look forward to working with you!</p>
@endsection

@section('signature')
	@include('signatures.kdunlap')
@endsection

@section('apply')
	@include('common.apply')
@endsection