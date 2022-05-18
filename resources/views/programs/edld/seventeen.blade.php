@extends('layouts.mjml')

@section('content')
<h3>Day 17 - Subject: Meet Your Team</h3>
<p>Dear @@{{First}},</p>

<p>Here at Mississippi State University, you have a team of staff to support you in the pursuit of your Master of Science in Educational Leadership with a concentration in School Administration (EDLD-EDLS).</p>

<table>
    <tbody>
        <tr>
            <td class="divider staff">
                <img src="https://www2.online.msstate.edu/sites/www.online.msstate.edu/files/inline-images/Tharp_Paula.jpg">
            </td>
            <td class="divider staff" style="text-align: center;">
                <b>Dr. Paula Tharp</b><br/>
                <i>Dept of Educational Leadership - Assistant Professor</i><br/>
                <a href="mailto:ptharp@colled.msstate.edu">ptharp@colled.msstate.edu</a><br/>
                (P): 662.325.4711<br/>
            </td>
        </tr>
        <tr>
        <td class="divider staff">
            <img src="https://goto.msstate.edu/www/images/Distance/staff/anusha_rijal.jpg"/>
            </td>
            <td class="divider staff" style="text-align: center;">
                <b>Anusha Rijal</b><br/>
                <i>Distance Coordinator</i><br/>
                662-325-8876<br/>
                <a href="mailto:a.rijal@msstate.edu">a.rijal@msstate.edu</a>
            </td>
        </tr>
    </tbody>
</table>

<p>We'd love to hear from you.  Contact us with any questions you may have about the program. We look forward to working with you!</p>
<p>Thank you,</p>
@endsection

@section('signature')
	@include('signatures.arijal')
@endsection

@section('apply')
	@include('common.apply')
@endsection