@extends('layouts.mjml')

@section('content')
<h3>Day 17 - Subject: Meet your Industrial Engineering program team!</h3>
<p>Dear @@{{First}},</p>

<p>At Mississippi State University, you have a team of staff who will support you in your pursuit of your degree.</p>
<table>
    <tbody>
        <tr>
            <td class="divider staff">
                <img src="https://goto.msstate.edu/www/images/Distance/staff/daphne_knox.png">
            </td>
            <td class="divider staff" style="text-align: center;">
                <p><b>Daphne Knox</b><br>
				Coordinator<br>
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