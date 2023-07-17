@extends('layouts.mjml')

@section('content')
<h3>Day 17 - Subject: Meet your Industrial Engineering program team!</h3>
<p>Dear @@{{First}},</p>

<p>At Mississippi State University, you have a team of staff who will support you in your pursuit of your degree.</p>
<table>
    <tbody>
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
<p>Please let us know if you have any questions!</p>
@endsection

@section('signature')
@include('signatures.arijal_swann')
@endsection

@section('apply')
	@include('common.apply')
@endsection