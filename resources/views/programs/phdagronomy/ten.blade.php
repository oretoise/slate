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
                <p>Mindy Wolfe has been working for the Center for Distance Education at Mississippi State University since 2000.  She coordinates programming for the College of Forest Resources, and the College of Agriculture and Life Sciences.</p>
                <p>Mindy holds a Bachelor of Business Administration from Mississippi State University.  She is currently an online student seeking her master’s degree in Food Science, Nutrition, and Health Promotion. In her leisure time, Mindy enjoys spending time with her family, spin classes, and cooking.</p>
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