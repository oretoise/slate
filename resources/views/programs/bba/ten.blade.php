@extends('layouts.mjml')

@section('content')
<h3>Day 10 - Subject: Meet your BBA program team!</h3>
<p>Dear @@{{First}},</p>
<p>At Mississippi State University, you have a team of staff who will support you in your pursuit of your degree.</p>
<p style="text-align: center;">Meet Your Team!</p>

<table style="width: 450px; margin: auto;">
    <tbody>
        <tr>
            <td class="divider" style="width: 50%;">
                <img src="https://goto.msstate.edu/www/images/Distance/staff/samantha_clardy.png">
            </td>
            <td class="divider" style="text-align: center; width: 50%;">
                <b>Samantha Clardy</b><br/>
                <i>Online Program Coordinator</i><br/>
                Center for Distance Education<br/>
                <a href="mailto:sam103@msstate.edu">sam103@msstate.edu</a><br/>
                (P): 662-325-9092<br/>
                (F): 622-325-2657
            </td>
        </tr>
        <tr>
            <td class="divider" style="width: 50%">
                <img src="https://goto.msstate.edu/www/images/Distance/bba/Pilgrim_Christopher_20190426_M4B9948~dp23.jpg">
            </td>
            <td class="divider" style="text-align: center; width: 50%;">
                <br/>
                <b>Chris Pilgram</b><br/>
                Assistant Director, Distance Learning<br/>
                College of Business<br/>
                <a href="mailto:clp23@business.msstate.edu">clp23@business.msstate.edu</a><br/>
                662-325-8695 (O)
            </td>
        </tr>
    </tbody>
</table>

<p>Chris and I are here to help.  We look forward to working with you!</p>
<p>Sincerely,</p>
@endsection

@section('signature')
    @include('signatures.sclardy')
@endsection

@section('apply')
    @include('common.apply')
@endsection
