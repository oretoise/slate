@extends('layouts.mjml')

@section('content')
<h3>Day 10 - Subject: Meet your Companion Animal Management Certificate team!</h3>

<p>Dear @@{{First}},</p>

<p>At Mississippi State University, you have a team of staff who will support you in your pursuit of your degree.</p>

<table>
    <tbody>
        <tr>
            <td class="divider staff">
                <img src="https://goto.msstate.edu/www/images/Distance/staff/daphne_knox.png">
            </td>
            <td class="divider staff" style="text-align: left;">
                <p>Daphne Knox has been working for the Center for Distance Education at Mississippi State University since 2018.  She coordinates programming for the College of Engineering, College of Forest Resources, and the College of Agriculture and Life Sciences.</p>
                <p>Daphne holds a Bachelor of Arts in Political Science and a Master of Public Policy and Administration from Mississippi State University.  In her leisure time, Daphne enjoys spending time with her family, playing tennis, and reading.</p>
            </td>
        </tr>
		<tr>
            <td class="divider staff">
                <img src="https://goto.msstate.edu/www/images/Distance/staff/erica_carroll.png">
            </td>
            <td class="divider staff" style="text-align: left;">
                <p>Erica Carroll joined the Animal and Dairy Science Family in the Spring of 2020.  She is an instructor and the advisor for the Companion Animal Management Certificate program. She is a Certified Veterinary Technician in Mississippi and a Licensed Veterinary Medical Technician in Tennessee.</p>
                <p>Erica holds a Bachelor of Science in Agriculture from Murray State University and a Master of Education from the University of Tennessee at Martin.  She spent 8 years teaching in a Veterinary Health Technology program.  She has also worked in a specialty animal hospital, a general practice, and a vaccine manufacturing lab.  She is also a 4-H and FFA volunteer. </p>
            </td>
        </tr>
    </tbody>
</table>

<p>We look forward to working with you!</p>
@endsection

@section('signature')
	@include('signatures.mwolfe')
@endsection

@section('apply')
	@include('common.apply')
@endsection