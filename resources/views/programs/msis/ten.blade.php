@extends('layouts.responsive')

@section('content')
<h3>Day 10 - Subject: Meet your team!</h3>

<p>Dear @{{First}},</p>

<p>Here at Mississippi State University, you have a team of staff here to support you in the pursuit of your degree.</p>

<table>
    <tbody>
        <tr>
            <td class="divider staff">
                <img src="https://goto.msstate.edu/www/images/Distance/programs/mba/cindy_smith.png">
            </td>
            <td class="divider staff" style="text-align: center;">
                <b>Cindy Smith</b><br/>
                <i>Director of Distance Learning</i><br/>
                College of Business<br/>
                <a href="mailto:csmith@business.msstate.edu">csmith@business.msstate.edu</a><br/>
                (P): 662.325.7281<br/>
                (F): 662.325.8161
            </td>
        </tr>
        <tr>
            <td class="divider staff">
                <img src="https://goto.msstate.edu/www/images/Distance/staff/mark_jimerson.png">
            </td>
            <td class="divider staff" style="text-align: center;">
                <b>Mark Jimerson</b><br/>
                <i>Distance Program Coordinator</i><br/>
                Center for Distance Education<br/>
                <a href="mailto:mark.jimerson@msstate.edu">mark.jimerson@msstate.edu</a>
                (P): 662.325.0848<br/>
                (F): 662.325.2657                
            </td>
        </tr>
    </tbody>
</table>

<p>Cindy and I are here to help.  We look forward to working with you!</p>
<p>Sincerely,</p>
@endsection

@section('signature')
	@include('signatures.mjimerson')
@endsection

@section('apply')
	@include('common.apply')
@endsection