@extends('layouts.mjml')

@section('content')
<h3>Day 13 - Subject: Meet your Health Promotion team!</h3>

<p>Here at Mississippi State University, you have a team of faculty and staff that is here to support you in your pursuit of your degree.</p>

<table style="width: 560px; margin: auto;">
    <tbody>
        <tr>
            <td class="divider staff">
                <img src="https://goto.msstate.edu/www/images/Distance/programs/wellness/barry_hunt.png">
            </td>
            <td class="divider staff" style="text-align: center; width: 30%;">
                <b>Dr. Barry Hunt</b><br/>
                <i>Master's Program Director and Professor</i><br/>
                Health Promotion<br/>
                <a href="mailto:bhunt@fsnhp.msstate.edu">bhunt@fsnhp.msstate.edu</a>
            </td>
            <td class="divider staff" style="text-align: left;">
                Dr. Hunt has a B.S. in school health education from Troy State University, and master's and doctoral degrees in health studies from the University of Alabama. Previously an evaluation consultant for Alabama Power Company's "Good Health Makes Sense" program, Dr. Hunt directs the health program at MSU.
            </td>
        </tr>
        <tr>
            <td class="divider staff">
                <img src="https://goto.msstate.edu/www/images/Distance/programs/fnh/a_gardner.png">
            </td>
            <td class="divider staff" style="text-align: center; width: 30%;">
                <b>Dr. Antonio Gardner</b><br/>
                <i>Assistant Professor of Heath Promotion<br/>
                <a href="mailto:ajg130@msstate.edu">ajg130@msstate.edu</a>
            </td>
            <td class="divider staff" style="text-align: left;">
                Dr. Gardner has a BS in Biology from Alabama A&M University in Normal, AL, an MS in Human Environmental Sciences with a Specialization in Rural Community Health from the University of Alabama, and a PhD in Health Education and Promotion from the University of Alabama. Health disparities have been his primary focus of research with a special interest in HIV prevention.
            </td>
        </tr>
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

<p>Let us know if you have any questions regarding the program. We're happy to help!</p>
<p>Thank you,</p>
@endsection

@section('signature')
	@include('signatures.dknox')
@endsection

@section('apply')
	@include('common.apply')
@endsection