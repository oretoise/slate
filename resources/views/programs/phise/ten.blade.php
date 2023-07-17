@extends('layouts.mjml')

@section('content')
<h3>Day 10 - Subject: Meet your Industrial & Systems Engineering Team!</h3>

<p>Dear @@{{First}},</p>

<p>At Mississippi State University, you have a team of staff who will support you in your pursuit of your degree.</p>

<table>
    <tbody>
		<tr>
            <td class="divider staff">
                <img alt="Mohammad Marufuzzaman" src="https://goto.msstate.edu/www/images/Distance/staff/maruf.png">
            </td>
            <td class="divider staff" style="text-align: left;">
                <p>Mohammad Marufuzzaman (called by “Maruf”), Ph.D., is an Associate Professor in the Department of Industrial & Systems Engineering (ISE) at Mississippi State University (MSU). He received his Ph.D. from the same department in 2014. Dr. Maruf's research interests lie in developing mathematical models and solution approaches to solve challenging optimization problems under uncertainty, with specific applications in the supply chain, security, and energy. Till now, Dr. Maruf secured over $15 million research grants (from federal and industry), published 67 journal articles, including articles in Transportation Science, IISE Transactions, and Annals of Operations Research, mentored 3 postdocs, and graduated 12 Ph.D. and 5 masters' students. Dr. Maruf's work has been widely recognized in the Industrial and System Engineering professional communities. He received multiple Best Paper Awards from IISE and INFORMS. Dr. Maruf is currently chairing the Transportation Working Group at MSU, Board of Directors in the Operations Research division at the IISE, and serving the Editorial Board in a few reputed journals.</p>
            </td>
        </tr>
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