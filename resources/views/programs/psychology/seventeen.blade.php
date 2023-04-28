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
                <a href="mailto:psyonline@psychology.msstate.edu">psyonline@psychology.msstate.edu</a><br/>
                (P): 662-325-7949<br/>
                (F): 622-325-7212
            </td>
        </tr>
        <tr>
            <td class="divider staff">
                <img src="https://goto.msstate.edu/www/images/Distance/staff/samantha_clardy.png">
            </td>
            <td class="divider staff" style="text-align: center;">
                <b>Samantha Clardy</b><br/>
                <i>Online Program Coordinator</i><br/>
                Center for Distance Education<br/>
                <a href="mailto:sam103@msstate.edu">sam103@msstate.edu</a>
                (P): 662.325.9092<br/>
                (F): 662.325.2657                
            </td>
        </tr>
    </tbody>
</table>

<p>Dr. Eakin and I are here to help.  We look forward to working with you!</p>
@endsection

@section('signature')
	@include('signatures.psychology')
@endsection

@section('apply')
	@include('common.apply')
@endsection
