@extends('layouts.responsive')

@section('content')
<h3>Day 3 - Subject: Career paths with the PHCL degree at MSU!</h3>
<p>Dear @{{First}},</p>

<img class="img-right" src="https://goto.msstate.edu/www/images/Distance/programs/phcl/phcl_1.png" />

<p>Develop your professional leadership skills with the online PhD in Community College Leadership at MSU!</p>

<p>This program prepares future professional administrators to</p>

<ul>
    <li>Manage educational, social, and economic changes</li>
    <li>Establish a work environment that is relevant within rural community colleges</li>
    <li>Incorporate best practices regarding teaching traditional and non-traditional students</li>
    <li>Appreciate and capitalize on strengths that diversity of personnel can provide rural communities and rural community colleges</li>
</ul>

<p>Career opportunities includes positions such as</p>
<ul>
    <li>Community college presidents</li>
    <li>Community college deans, directors, and other administrators</li>
    <li>University assistant professors</li>
</ul>

<p>Ready to apply?  Let me know!  I'll be happy to assist you!</p>
<p>Thank you,</p>
@endsection

@section('signature')
	@include('signatures.vtate')
@endsection

@section('apply')
	@include('common.apply')
@endsection