@extends('layouts.mjml')

@section('content')
<h3>Day 14 - Subject: Meet your team!</h3>
<p>Dear @@{{First}},</p>

<table>
    <tbody>
        <tr>
            <td class="divider staff">
                <img src="https://goto.msstate.edu/www/images/Distance/programs/veterans/l_cornelious.png">
            </td>
            <td class="divider staff" style="text-align: center;">
                <b>Dr. Linda Cornelious</b><br/>
                <i>Professor, Program Coordinator, & Advisor</i><br/>
                <a href="mailto:lcornelious@colled.msstate.edu">lcornelious@colled.msstate.edu</a><br/>
                (P): 662.325.8944
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
                <img src="https://goto.msstate.edu/www/images/Distance/staff/valerie_tate.png">
            </td>
            <td class="divider staff" style="text-align: center;">
                <b>Ms. Valerie Tate</b><br/>
                <i>Distance Coordinator </i><br/>
                <a href="mailto:v.tate@msstate.edu">v.tate@msstate.edu</a><br/>
                (P): 662.325.8876
            </td>
        </tr>
    </tbody>
</table>

<p>We would love to get to know you, and we'll be glad to assist you with answering any questions that you have about the VCP.</p>
<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.vtate')
@endsection

@section('apply')
	@include('common.apply')
@endsection