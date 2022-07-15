@extends('layouts.mjml')

@section('content')
<h3>Day 17 - Subject: Meet your Public Procurement Certificate team!</h3>
<p>Dear @@{{First}},</p>

<p>At Mississippi State University, you have a team of staff who will support you in your pursuit of your degree.</p>
<table style="width: 450px; margin: auto;">
    <tbody>
		<tr>
            <td class="divider" style="width: 50%;">
                <img src="https://goto.msstate.edu/www/images/Distance/programs/psychology/knox.png">
            </td>
            <td class="divider" style="text-align: left; width: 50%;">
                <p>Daphne Knox has been working for the Center for Distance Education at Mississippi State University since 2018. She coordinates programming for the College of Engineering, College of Forest Resources, and the College of Agriculture and Life Sciences.</p>
				<p>Daphne holds a Bachelor of Arts in Political Science and a Master of Public Policy and Administration from Mississippi State University. In her leisure time, Daphne enjoys spending time with her family, playing tennis, and reading.</p>
			</td>
        </tr>
    </tbody>
</table>


<p>Please let me know if you have any questions!</p>
@endsection

@section('signature')
	@include('signatures.dknox')
@endsection

@section('apply')
	@include('common.apply')
@endsection