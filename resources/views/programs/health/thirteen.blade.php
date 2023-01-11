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
                <img src="https://www2.online.msstate.edu/sites/www.online.msstate.edu/files/inline-images/pylate_0.jpg">
            </td>
            <td class="divider staff" style="text-align: center; width: 30%;">
                <b>Dr. Leah Pylate</b><br/>
                <i>Assistant Professor</i><br/>
                Health Promotion<br/>
                <a href="mailto:lbp77@msstate.edu">lbp77@msstate.edu</a>
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
                Dr. Gardner has a BS in Biology from Alabama A&M University in Normal, AL, and an MS in Human Environmental Sciences with a Specialization in Rural Community Health from the University of Alabama, and a PhD in Health Education and Promotion from the University of Alabama. Health disparities have been his primary focus of research with a special interest in HIV prevention.
            </td>
        </tr>
        <tr>
            <td class="divider staff">
                <img alt="Lily Hudson" src="https://goto.msstate.edu/www/images/Distance/staff/lily_hudson.png">
            </td>
            <td class="divider staff" style="text-align: left;">
				<p><b>Lily Hudson</b><br>
				Online Coordinator<br>
				Center for Distance Education<br>
				(E): <a href="mailto:lily.hudson@msstate.edu">lily.hudson@msstate.edu</a><br>
				(P): 662.325.1559</p>
			</td>
        </tr>
    </tbody>
</table>

<p>Let us know if you have any questions regarding the program. We're happy to help!</p>
<p>Thank you,</p>
@endsection

@section('signature')
	@include('signatures.lhudson')
@endsection

@section('apply')
	@include('common.apply')
@endsection