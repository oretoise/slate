@extends('layouts.mjml')

@section('content')
<h3>Day 13 - Subject: Meet your team!</h3>

<p>Here at Mississippi State University, you have faculty and staff that are here to support you in your pursuit of your degree.</p>

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
        <tr>
            <td class="divider staff">
                <img src="https://goto.msstate.edu/www/images/Distance/programs/mabm/matt_janzen.png">
            </td>
            <td class="divider staff" style="text-align: center; width: 30%;">
                <b>Matt Janzen</b><br/>
                <i>MABM Program Director</i><br/>
                (P): 662.325.0848<br/>
                <a href="mailto:mgj50@msstate.edu">mgj50@msstate.edu</a>
            </td>
            <td class="divider staff" style="text-align: left;">
                Matthew holds a Bachelor of Science in Agribusiness Management and a Master of Science in Agricultural Economics from Mississippi State University.  He has experience with management, research and production through multiple companies within both the private and public sectors.  In his leisure time, Matthew enjoys spending time with his family, tending to his animals, and spending time in the outdoors.
            </td>
        </tr>
    </tbody>
</table>

<p>We are here to assist you with any questions you have regarding the program. We're happy to help!</p>

<p>Thank you,</p>
@endsection

@section('signature')
	@include('signatures.dknox')
@endsection

@section('apply')
	@include('common.apply')
@endsection