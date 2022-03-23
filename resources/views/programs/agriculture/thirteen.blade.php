@extends('layouts.mjml')

@section('content')
<h3>Day 13 - Subject: Your point of contact for the AGRI program!</h3>

<p>Here at Mississippi State University, you have staff that are here to support you in the pursuit of your degree.</p>

<table>
    <tbody>
        <tr>
            <td class="divider staff">
                <img src="https://goto.msstate.edu/www/images/Distance/staff/daphne_knox.png">
            </td>
            <td class="divider staff" style="text-align: center; width: 30%;">
                <b>Daphne Knox</b><br/>
                <i>Program Coordinator</i><br/>
                Center for Distance Education<br/>
                <a href="mailto:daphne.knox@msstate.edu">daphne.knox@msstate.edu</a><br/>
                (P): 662.325.0658<br/>
                (F): 662.325.2657
            </td>
            <td class="divider staff" style="text-align: left;">
                Daphne holds a Bachelor of Arts in Political Science and a Master of Public Policy and Administration from Mississippi State University.  In her leisure, Daphne enjoys spending time with her family, playing tennis, and reading.
            </td>
        </tr>
    </tbody>
</table>

<p>I am here to assist you with any questions you have regarding the program.  I'm happy to help!</p>
<p>Thank you,</p>
@endsection

@section('signature')
	@include('signatures.mwolfe')
@endsection

@section('apply')
	@include('common.apply')
@endsection