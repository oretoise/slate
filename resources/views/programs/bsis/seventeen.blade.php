@extends('layouts.responsive')

@section('content')
<h3>Day 17 - Subject: Meet your team!</h3>
<p>Dear @{{First}},</p>

<table style="width: 450px; margin: auto;">
    <tbody>
        <tr>
            <td class="divider" style="width: 50%;">
                <img src="https://goto.msstate.edu/www/images/Distance/staff/evan_hawkins.png">
            </td>
            <td class="divider" style="text-align: center; width: 50%;">
                <b>Evan Hawkins</b><br/>
                <i>BSIS Coordinator/Advisor</i><br/>
                Center for Distance Education<br/>
                <a href="mailto:e.hawkins@msstate.edu">e.hawkins@msstate.edu</a><br/>
                (P): 662-325-2655<br/>
                (F): 622-325-2657
            </td>
        </tr>
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
@endsection

@section('signature')
	@include('signatures.ehawkins')
@endsection

@section('apply')
	@include('common.apply')
@endsection