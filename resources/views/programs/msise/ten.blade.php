@extends('layouts.mjml')

@section('content')
<h3>Day 10 - Subject: Meet your Industrial & Systems Engineering Team!</h3>

<p>Dear @@{{First}},</p>

<p>At Mississippi State University, you have a team of staff who will support you in your pursuit of your degree.</p>

<table>
    <tbody>
		<tr>
            <td class="divider staff">
                <img alt="Linkan Bian, Ph.D." src="https://goto.msstate.edu/www/images/Distance/programs/ise/linkan_bian.jpg">
            </td>
            <td class="divider staff" style="text-align: left;">
                <p>Linkan Bian, Ph.D. is an associate professor in Industrial and Systems Engineering Department at Mississippi State University. He received his Ph.D. in Industrial and Systems Engineering from Georgia Institute of Technology in 2013 and a B.S. degree in Applied Mathematics from Beijing University. Dr. Bian's research interests focus on the analytics of Big Data generated from complex engineering systems. Methodology of his research includes areas such as, data mining, surrogate modeling, statistics optimization, and uncertainty quantification. His research has been applied to areas including additive manufacturing, reliability/maintenance, supply chains, cybersecurity, and other engineering systems. He has received federal funding from NSF, DoD/ARL, DoD/ERDC, and DoE, as well as industrial companies. Dr. Bian has published over 30 peer-reviewed papers that appear in prestigious journals such as IISE Transactions, ASME Journals, Additive Manufacturing, Rapid Prototyping, IEEE Transactions, and other journals.</p>
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
            <td class="divider staff">
                <img alt="Daphne Knox" src="https://goto.msstate.edu/www/images/Distance/staff/daphne_knox.png">
            </td>
            <td class="divider staff" style="text-align: left;">
                <p>Daphne Knox has been working for the Center for Distance Education at Mississippi State University since 2018.  She coordinates programming for the College of Engineering, College of Forest Resources, and the College of Agriculture and Life Sciences.</p>
                <p>Daphne holds a Bachelor of Arts in Political Science and a Master of Public Policy and Administration from Mississippi State University.  In her leisure time, Daphne enjoys spending time with her family, playing tennis, and reading.</p>
            </td>
        </tr>
    </tbody>
</table>

<p>We look forward to working with you!</p>
<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.dknox_swann')
@endsection

@section('apply')
	@include('common.apply')
@endsection