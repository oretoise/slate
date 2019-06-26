@extends('layouts.responsive')

@section('content')
<h3>Day 13 - Subject: Meet your team!</h3>

<p>Dear @{{First}},</p>

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
                (P): 662.325.0658
            </td>
            <td class="divider staff" style="text-align: left;">
                Daphne holds a Bachelor of Arts in Political Science and a Master of Public Policy and Administration from Mississippi State University.  In her leisure, Daphne enjoys spending time with her family, playing tennis, and reading.
            </td>
        </tr>
        <tr>
            <td class="divider staff">
                <img src="https://goto.msstate.edu/www/images/Distance/programs/msei/julie_parker.png">
            </td>
            <td class="divider staff" style="text-align: center; width: 30%;">
                <b>Julie Parker</b><br/>
                <i>Associate Professor</i><br/>
                Human Development and Family Studies<br/>
                (P): 662.325.2950<br/>
                <a href="mailto:jcp162@msstate.edu">jcp162@msstate.edu</a>
            </td>
            <td class="divider staff" style="text-align: left;">
                Dr. Julie Parker is an Associate Professor in the School of Human Sciences at Mississippi State University. She currently has appointments in research, teaching, and Extension. Her background in pedagogy for early childhood professionals and research on the developmental and physical well-being for young children with and without disabilities are central to her work. She currently serves, by governor appointment, on the Mississippi Interagency Coordinating Council for Part C programming.  She also chairs the Comprehensive System of Professional Development committee for the state Part C program, First Steps.  
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