@extends('layouts.responsive')

@section('content')
<h3>Day 10 - Subject: Meet your BBA program team!</h3>
<p>Dear *|FNAME|*,</p>
<p>At Mississippi State University, you have a team of staff who will support you in your pursuit of your degree.</p>
<p style="text-align: center;">Meet Your Team!</p>

<table style="width: 400px; margin: auto;">
    <tr>
        <td class="divider" style="width: 50%;">
            <img src="https://goto.msstate.edu/www/images/Distance/bba/Jimerson_Mark_20170322_R3H1186~mj359.jpg">
        </td>
        <td class="divider">
            Mark Jimerson<br/>
            Program Coordinator<br/>
            Center for Distance Education<br/>
            mark.jimerson@mstate.edu<br/>
            662-325-9092 (O)<br/>
            622-325-2657 (F)
        </td>
    </tr>
    <tr>
        <td class="divider"></td>
        <td class="divider">
            <br/>
            Chris Pilgram<br/>
            Assistant Director, Distance Learning<br/>
            College of Business<br/>
            <a href="mailto:clp23@business.msstate.edu">clp23@business.msstate.edu</a><br/>
            662-325-8695 (O)
        </td>
    </tr>
</table>

<p>Chris and I are here to help.  We look forward to working with you!</p>
<p>Sincerely,</p>
@endsection

@section('signature')
    @include('signatures.mjimerson')
@endsection

@section('apply')
    @include('programs.bba.apply')
@endsection
