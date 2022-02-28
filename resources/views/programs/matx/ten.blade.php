@extends('layouts.mjml')

@section('content')
<h3>Day 10 - Subject: Meet your MATX Team!</h3>
<p>Dear @@{{First}},</p>

<p>We'd love to get to know you. Contact us with any question you may have about the MATX program.</p>

<table style="width: 560px; margin: auto;">
    <tbody>
        <tr>
            <td class="divider staff">
                <img src="https://www2.online.msstate.edu/sites/www.online.msstate.edu/files/inline-images/palmer.jpg">
            </td>
            <td class="divider staff" style="text-align: center; width: 30%;">
                <b>Elizabeth H. Palmer</b><br/>
                <i>MAT-X Coordinator</i><br/>
                Curriculum, Instruction And Special Education<br/>
                <a href="mailto:ehall@colled.msstate.edu">ehall@colled.msstate.edu</a>
            </td>
        </tr>
        <tr>
            <td class="divider staff">
                <img src="https://goto.msstate.edu/www/images/Distance/staff/samantha_clardy.png">
            </td>
            <td class="divider staff" style="text-align: center; width: 30%;">
                <b>Ms. Samantha Clardy</b><br/>
                <i>Distance Coordinator</i><br/>
                662-325-9092<br/>
                <a href="mailto:s.clardy@msstate.edu">s.clardy@msstate.edu</a>
            </td>
        </tr>
    </tbody>
</table>

<p>We are here to help throughout your academic career!</p>
<p>Thank you,</p>
@endsection

@section('signature')
	@include('signatures.sclardy')
@endsection

@section('apply')
	@include('common.apply')
@endsection