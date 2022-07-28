@extends('layouts.mjml')

@section('content')
<h3>Day 17 - Subject: Meet your Electrical Engineering program team!</h3>
<p>Dear @@{{First}},</p>

<p>At Mississippi State University, you have a team of staff who will support you in your pursuit of your degree. Meet your team!</p>

<table style="width: 450px; margin: auto;">
    <tbody>
		<tr>
            <td class="divider" style="width: 50%;">
                <img src="https://goto.msstate.edu/www/images/Distance/staff/crosland.png">
            </td>
            <td class="divider" style="text-align: center; width: 50%;">
                <p>Kylie Crosland<br>
				   Undergraduate Program Coordinator<br>
				   Department of Electrical & Computer Engineering<br>
				   (E): <a href="mailto:kylie@ece.msstate.edu">kylie@ece.msstate.edu</a><br>
				   (P): 662.325.7949</p>
			</td>
        </tr>
		<tr>
            <td class="divider" style="width: 50%;">
                <img src="https://goto.msstate.edu/www/images/Distance/staff/daphne_knox.png">
            </td>
            <td class="divider" style="text-align: center; width: 50%;">
                <p>Daphne Knox<br>
				   Coordinator<br>
				   Center for Distance Education<br>
				   (E): <a href="mailto:daphne.knox@msstate.edu">daphne.knox@msstate.edu</a><br>
				   (P): 662.325.0658</p>
			</td>
        </tr>
    </tbody>
</table>

<p>Please let us know if you have any questions!</p>
@endsection

@section('signature')
	@include('signatures.dknox')
@endsection

@section('apply')
	@include('common.apply')
@endsection