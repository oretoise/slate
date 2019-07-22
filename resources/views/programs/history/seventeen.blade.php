@extends('layouts.responsive')

@section('content')
<h3>Day 17 - Subject: Meet your History program team!</h3>
<p>Dear @{{First}},</p>
<p>Here at Mississippi State University, you have a team of staff who are here to support you in 
your pursuit of your degree. Meet your team!</p>

<table style="width: 450px; margin: auto;">
    <tbody>
        <tr>
            <td class="divider" style="width: 50%;">
                <img src="https://goto.msstate.edu/www/images/Distance/programs/history/matt_lavine.png">
            </td>
            <td class="divider" style="text-align: center; width: 50%;">
                <b>Dr. Matt Lavine</b><br/>
                <i>Advisor</i><br/>
                <i>Associate Professor/Undergraduate Coordinator</i><br/>
                Department of History<br/>
                <a href="mailto:mlavine@history.msstate.edu">mlavine@history.msstate.edu</a><br/>
                (P): 662-325-8912<br/>
                (F): 622-325-1139
            </td>
        </tr>
        <tr>
            <td class="divider" style="width: 50%;">
				<img src="https://goto.msstate.edu/www/images/Distance/staff/joy_bailey.png" />
			</td>
            <td class="divider" style="text-align: center; width: 50%;">
                <br/>
                <b>Joy Bailey</b><br/>
                <i>Coordinator</i><br/>
                Center for Distance Education<br/>
                <a href="mailto:joy.bailey@msstate.edu">joy.bailey@msstate.edu</a><br/>
                (P): 662-325-9684<br/>
                (F): 622-325-2657
            </td>
        </tr>
    </tbody>
</table>
<p>Dr. Lavine and I are here to help you, and we look forward to working with you!</p>
@endsection

@section('signature')
	@include('signatures.jbailey')
@endsection

@section('apply')
	@include('common.apply')
@endsection