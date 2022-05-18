@extends('layouts.mjml')

@section('content')
<h3>Day 17 - Subject: Meet your team!</h3>
<p>Dear @@{{First}},</p>

<p>Here are Mississippi State University, you have a team of staff to support you in the pursuit of your degree.</p>

<table>
    <tbody>
        <tr>
            <td class="divider staff">
                <img src="https://goto.msstate.edu/www/images/Distance/programs/phcl/stephanie_king.png">
            </td>
            <td class="divider staff" style="text-align: center;">
                <b>Dr. Stephanie King</b><br/>
                <i>Grad Coordinator/Advisor</i><br/>
                <a href="mailto:cdleadership@colled.msstate.edu">cdleadership@colled.msstate.edu</a><br/>
                (P): 662.325.7066
            </td>
        </tr>
        <tr>
            <td class="divider staff">
                <img src="https://goto.msstate.edu/www/images/Distance/staff/samantha_clardy.png">
            </td>
            <td class="divider staff" style="text-align: center;">
                <b>Mrs. Anusha Rijal</b><br/>
                <i>Distance Coordinator </i><br/>
                <a href="mailto:a.rijal@msstate.edu">a.rijal@msstate.edu</a><br/>
                (P): 662.325.8876
            </td>
        </tr>
    </tbody>
</table>

<p>We look forward to working with you! Let us know how we can help!</p>
<p>Sincerely,</p>
@endsection

@section('signature')
	@include('signatures.arijal')
@endsection

@section('apply')
	@include('common.apply')
@endsection