@extends('layouts.mjml')

@section('content')
<h3>Day 10 - Subject: Meet your MS Sustainable Bioproducts team!</h3>

<p>Dear @@{{First}},</p>

<p>At Mississippi State University, you have a team of staff who will support you in your pursuit of your degree.</p>

<table>
    <tbody>
		<tr>
            <td class="divider staff">
                <img src="https://goto.msstate.edu/www/images/Distance/programs/susbio/beth-stokes.jpg">
            </td>
            <td class="divider staff" style="text-align: left;">
                <p>Beth Stokes is an Assistant Professor in the Department of Sustainable Bioproducts. Dr. Stokes teaches environmental courses within the department and directs research on prevention of deterioration in wood products, development of environmentally friendly protections for wood products, and utilization of wastes produced in wood products manufacture. Currently, she serves as Undergraduate Coordinator and assists in academic program development at the undergraduate and graduate levels. Dr. Stokes has been with the Department since 2015 as a faculty member and earned a PhD in Forest Resources with the Department in 2011.</p>
            </td>
        </tr>
		<tr>
            <td class="divider staff">
                <img src="https://goto.msstate.edu/www/images/Distance/programs/susbio/jeanie-mcneel.jpg">
            </td>
            <td class="divider staff" style="text-align: left;">
                <p>Jeanie McNeel serves the Department of Sustainable Bioproducts as the Coordinator of Administrative Services.  Currently her roles and responsibilities include assisting faculty with acclimating new and incoming students into the Sustainable Bioproducts academic programs at MSU.  Jeanie has been with the Department since 1989.  </p>
            </td>
        </tr>
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
    </tbody>
</table>

<p>We look forward to working with you!</p>
<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.mwolfe')
@endsection

@section('apply')
	@include('common.apply')
@endsection