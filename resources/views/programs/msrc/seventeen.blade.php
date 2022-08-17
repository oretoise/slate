@extends('layouts.mjml')

@section('content')
<h3>Day 17 - Subject: Meet your MS Rehabilitation Counseling program team!</h3>
<p>Dear @@{{First}},</p>

<p>Here at Mississippi State University, you have a team of staff who are here to support you in the pursuit of your degree. Meet your team!</p>
<table>
    <tbody>
        <tr>
            <td class="divider staff">
                <img src="https://goto.msstate.edu/www/images/Distance/staff/ahonle.jpg">
            </td>
            <td class="divider staff" style="text-align: center;">
                <b>Dr. Zaccheus J. Ahonle</b><br/>
                <i>Counseling, Educational Psychology & Foundations</i><br/>
				Assistant Professor/ Advisor<br/>
                <a href="mailto:zja34@msstate.edu">zja34@msstate.edu </a><br/>
            </td>
        </tr>
        <tr>
            <td class="divider staff">
                <img src="https://goto.msstate.edu/www/images/Distance/staff/anusha_rijal.jpg">
            </td>
            <td class="divider staff" style="text-align: center;">
                <b>Anusha Rijal</b><br/>
                <i>Distance Coordinator </i><br/>
                <a href="mailto:a.rijal@msstate.edu">a.rijal@msstate.edu</a><br/>
                (P): 662.325.8876
            </td>
        </tr>
    </tbody>
</table>

<p>We are here to help you throughout your academic career!</p>
@endsection

@section('signature')
	@include('signatures.arijal')
@endsection

@section('apply')
	@include('common.apply')
@endsection