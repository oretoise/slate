@extends('layouts.mjml')

@section('content')
<h3>Day 14 - Subject: Meet your team!</h3>
<p>Dear @@{{First}},</p>

<table>
    <tbody>
        <tr>
            <td class="divider staff">
                <img src="https://goto.msstate.edu/www/images/Distance/programs/veterans/adams.png">
            </td>
            <td class="divider staff" style="text-align: center;">
                <b>Dr. James Adams</b><br/>
                <i>Veterans' Certificate Program Coordinator</i><br/>
                <a href="mailto:jadams@colled.msstate.edu">jadams@colled.msstate.edu</a><br/>
                (P): 662.325.7563
            </td>
        </tr>
        <tr>
            <td class="divider staff">
                <img src="https://goto.msstate.edu/www/images/Distance/programs/veterans/b_lock.png">
            </td>
            <td class="divider staff" style="text-align: center;">
                <b>Brian Lock, LTC (R)</b><br/>
                <i>Director, Center for America's Veterans</i><br/>
                <a href="mailto:blocke@saffairs.msstate.edu">blocke@saffairs.msstate.edu</a><br/>
                (P): 662.325.6719
            </td>
        </tr>
        <tr>
            <td class="divider staff">
                <img src="https://goto.msstate.edu/www/images/Distance/staff/samantha_clardy.png">
            </td>
            <td class="divider staff" style="text-align: center;">
                <b>Ms. Samantha Clardy</b><br/>
                <i>Distance Coordinator </i><br/>
                <a href="mailto:s.clardy@msstate.edu">s.clardy@msstate.edu</a><br/>
                (P): 662.325.9092
            </td>
        </tr>
    </tbody>
</table>

<p>We would love to get to know you, and we'll be glad to assist you with answering any questions that you have about the VCP.</p>
<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.sclardy')
@endsection

@section('apply')
	@include('common.apply')
@endsection