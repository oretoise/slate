@extends('layouts.mjml')

@section('content')
<h3>Day 17 - Subject: Meet your Psychology program team!</h3>
<p>Dear @@{{First}},</p>

<p>
	Here at Mississippi State University, you have a team of staff who are here to support you in your pursuit of your degree. Meet your team!
</p>

<table style="width: 450px; margin: auto;">
    <tbody>
		<tr>
            <td class="divider" style="width: 50%;">
                <img src="https://goto.msstate.edu/www/images/Distance/programs/psychology/eakins.png">
            </td>
            <td class="divider" style="text-align: center; width: 50%;">
                <b>Deborah K. Eakin, Ph.D.</b><br/>
                <i>Online Coordinator/Advisor</i><br/>
                Department of Psychology<br/>
                <a href="mailto:deakin@psychology.msstate.edu">deakin@psychology.msstate.edu</a><br/>
                (P): 662-325-7949<br/>
                (F): 622-325-7212
            </td>
        </tr>
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

<p>Dr. Eakin, Kali and Evan are here to help.  We look forward to working with you!</p>
@endsection

@section('signature')
	@include('signatures.psychology')
@endsection

@section('apply')
	@include('common.apply')
@endsection