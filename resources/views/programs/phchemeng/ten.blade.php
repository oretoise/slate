@extends('layouts.mjml')

@section('content')
<h3>Day 10 - Subject: Meet your Chemical Engineering program team!</h3>

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
            <td class="divider" style="width: 50%;">
                <img src="https://goto.msstate.edu/www/images/Distance/staff/anusha_rijal.jpg" />
            </td>
            <td class="divider" style="text-align: center; width: 50%;">
                <b>Anusha Rijal</b><br/>
                <i>Online Program Coordinator</i><br/>
                Center for Distance Education<br/>
				(P): 662-325-8876
                <a href="mailto:a.rijal@msstate.edu">a.rijal@msstate.edu</a>
            </td>
        </tr>
    </tbody>
</table>

<p>We look forward to working with you!</p>
<p>All the best,</p>
@endsection

@section('signature')
@include('signatures.arijal_swann')
@endsection

@section('apply')
	@include('common.apply')
@endsection