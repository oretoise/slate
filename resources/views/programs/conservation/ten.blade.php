@extends('layouts.mjml')

@section('content')
<h3>Day 10 - Subject: Meet your MS Conservation Education team!</h3>

<p>Dear @@{{First}},</p>

<p>At Mississippi State University, you have a team of staff who will support you in your pursuit of your degree.</p>

<table>
    <tbody>
    <tr>
            <td class="divider" style="width: 50%;">
                <img src="https://goto.msstate.edu/www/images/Distance/staff/wolfe.png">
            </td>
            <td class="divider" style="text-align: center; width: 50%;">
                <b>Mindy Wolfe</b><br/>
                <i>Recruitment Coordinator</i><br/>
                Center for Distance Education<br/>
                <a href="mailto:mindy.wolfe@msstate.edu">mindy.wolfe@msstate.edu</a><br/>
                (P): 662-325-8545
            </td>
        </tr>
		<tr>
            <td class="divider staff">
                <img src="https://goto.msstate.edu/www/images/Distance/programs/conservation/stacy_hines.jpg">
            </td>
            <td class="divider staff" style="text-align: left;">
                <p>Dr. Stacy L. Hines is an instructor in the Department of Wildlife, Fisheries and Aquaculture at Mississippi State University. She currently has appointments in teaching and program coordination for the online Conservation Education program. Her background in nonformal and formal conservation education are central to her work.  She currently serves as a board member for the Friends of the Noxubee Refuge and on the Mississippi Environmental Education Alliance.</p>
            </td>
        </tr>
    </tbody>
</table>

<p>We look forward to working with you!</p>
<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.mwolfe_hines')
@endsection

@section('apply')
	@include('common.apply')
@endsection