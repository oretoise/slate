@extends('layouts.mjml')

@section('content')
<h3>Day 13 - Subject: Meet your Wellness Certificate team!</h3>

<p>Here at Mississippi State University, you have a team of faculty and staff that is here to support you in your pursuit of your degree.</p>

<table style="width: 560px; margin: auto;">
    <tbody>
        <tr>
            <td class="divider staff">
                <img src="https://goto.msstate.edu/www/images/Distance/programs/wellness/will_evans.png">
            </td>
            <td class="divider staff" style="text-align: center; width: 30%;">
                <b>Dr. Will Evans</b><br/>
                <i>Certificate Program Director</i><br/>
                Professor and Head<br/>
                Food Science, Nutrition, and Health Promotion<br/>
                <a href="mailto:mwe59@msstate.edu">mwe59@msstate.edu</a><br/>
                (P): 662.325.5508<br/>
                (F): 662.325.8728
            </td>
            <td class="divider staff" style="text-align: left;">
                Dr. Evans is a master certified health education specialist and a certified wellness practitioner. He earned his bachelor's degree from Indiana University and his master's and doctoral degrees from the University of Alabama. He received a Doctor of Chiropractic degree from Logan University.
            </td>
        </tr>
        <tr>
            <td class="divider staff">
                <img src="https://goto.msstate.edu/www/images/Distance/programs/wellness/barry_hunt.png">
            </td>
            <td class="divider staff" style="text-align: center; width: 30%;">
                <b>Dr. Barry Hunt</b><br/>
                <i>Master's Program Director and Professor</i><br/>
                Health Promotion<br/>
                <a href="mailto:bhunt@fsnhp.msstate.edu">bhunt@fsnhp.msstate.edu</a><br/>
                (P): 662.325.7230<br/>
                (F): 662.325.8728
            </td>
            <td class="divider staff" style="text-align: left;">
                Dr. Hunt has a B.S. in school health education from Troy State University, and master's and doctoral degrees in health studies from the University of Alabama. Previously an evaluation consultant for Alabama Power Company's "Good Health Makes Sense" program, Dr. Hunt directs the health program at MSU.
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

<p>Dr. Evans, Dr. Hunt, and I are here to assist you with any questions you may have about the program.</p>
<p>Thank you,</p>
@endsection

@section('signature')
	@include('signatures.dknox')
@endsection

@section('apply')
	@include('common.apply')
@endsection