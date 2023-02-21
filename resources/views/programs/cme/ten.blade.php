@extends('layouts.mjml')

@section('content')
<h3>Day 10 - Subject: Meet your Computational Engineering program team!</h3>

<p>Dear @@{{First}},</p>

<p>At Mississippi State University, you have a team of staff who will support you in your pursuit of your degree.</p>

<table>
    <tbody>
        <tr>
            <td class="divider staff">
                <img alt="Tamra Swann" src="https://goto.msstate.edu/www/images/Distance/staff/tswann.png">
            </td>
            <td class="divider staff" style="text-align: left;">
                <p>Tamra Swann began working as the Bagley College's distance education coordinator in 2014. Her responsibilities are to assist with the facilitation and coordination of the college's distance education programs and recruit distance education students. She works with students, faculty, technology services and other offices on campus on various BCoE graduate and distance projects.</p>
                <p>Tamra has a bachelor's in public relations, a master's in agriculture and extension education from Mississippi State, and she is currently working on her PhD in Instructional Systems and Workforce Development.</p>
            </td>
        </tr>
        <tr>
            <td class="divider staff">
                <img alt="Mindy Wolfe" src="https://goto.msstate.edu/www/images/Distance/staff/mindy_wolfe.png">
            </td>
            <td class="divider staff" style="text-align: left;">
                <p>Mindy Wolfe has been working for the Center for Distance Education at Mississippi State University since 2000.  She coordinates programming for the College of Forest Resources, and the College of Agriculture and Life Sciences. </p>
                <p>Mindy holds a Bachelor of Business Administration from Mississippi State University.  She is currently an online student seeking her master’s degree in Food Science, Nutrition, and Health Promotion. In her leisure time, Mindy enjoys spending time with her family, spin classes, and cooking. </p>
            </td>
        </tr>
    </tbody>
</table>

<p>We look forward to working with you!</p>
<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.mwolfe_swann')
@endsection

@section('apply')
	@include('common.apply')
@endsection