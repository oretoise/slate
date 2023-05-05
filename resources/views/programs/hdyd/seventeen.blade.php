@extends('layouts.mjml')

@section('content')
<h3>Day 17 - Subject: Meet your team!</h3>

<p>Dear @@{{First}},</p>

<p>At Mississippi State University, you have a team of staff who will support you in your pursuit of your degree.</p>

<table>
    <tbody>
    <tr>
            <td class="divider" style="width: 50%;">
                <img src="https://goto.msstate.edu/www/images/Distance/staff/phillips.png">
                <b>Tommy M. Phillips, Ph.D.</b><br/>
                Pronouns: (he/him/his)<br/>
                <i>Associate Professor</i><br/>
                School of Human Sciences<br/>
                <a href="mailto:tom.phillips@msstate.edu">tom.phillips@msstate.edu</a><br/>
                (P): 662-325-0655
            </td>
            <td class="divider" style="text-align: center; width: 50%;">
                <p>Dr. Tommy Phillips is an Associate Professor of Human Development and Family Science in the School of Human Sciences at Mississippi State University.  He holds a Bachelor of Arts and Master of Arts in Psychology from the University of West Georgia and a Ph.D. in Human Development and Family Studies from Auburn University.</p>
                <p>In his free time, Dr. Phillips enjoys spending time with his wife and sons, gardening, grilling, and pretty much all things outdoors.</p>
            </td>
        </tr>
    <tr>
            <td class="divider" style="width: 50%;">
                <img src="https://goto.msstate.edu/www/images/Distance/staff/wolfe.png">
                <b>Mindy Wolfe</b><br/>
                <i>Recruitment Coordinator</i><br/>
                Center for Distance Education<br/>
                <a href="mailto:mindy.wolfe@msstate.edu">mindy.wolfe@msstate.edu</a><br/>
                (P): 662-325-8545
            </td>
            <td class="divider" style="text-align: center; width: 50%;">
                <p>Mindy Wolfe has been working for the Center for Distance Education at Mississippi State University since 2000.  She coordinates programming for the College of Forest Resources, and the College of Agriculture and Life Sciences. </p>
                <p>Mindy holds a Bachelor of Business Administration from Mississippi State University.  She is currently an online student seeking her master’s degree in Food Science, Nutrition, and Health Promotion. In her leisure time, Mindy enjoys spending time with her family, spin classes, and cooking. </p>
            </td>
        </tr>
    </tbody>
</table>

<p>Please let me know if you have any questions!</p>
<p>Thank you,</p>
@endsection

@section('signature')
	@include('signatures.mwolfe')
@endsection

@section('apply')
	@include('common.apply')
@endsection