@extends('layouts.mjml')

@section('content')
<h3>Day 0 - Subject: Thank you for checking out MSU's online Child Development program!</h3>

<img class="img-right" src="https://goto.msstate.edu/www/images/Distance/programs/hdfs/hdfs_1.jpg" width="350px" alt="Children reading together."/>

<p>Dear @@{{First}},</p>

<p>Thank you for checking out MSU's online Bachelor of Science (BS) in Human Development and Family Science with a concentration in Child Development degree program.</p>

<p>The BS in Human Development and Family Science with a concentration in Child Development degree program is designed both for students who want to complete or start their degree completely online. The child development concentration explores the growth and development of children (conception until adolescence) within the family system and sociocultural milieu.</p>

<p><b>What can you do with a BS in Human Development and Family Science with a concentration in Child Development?</b></p>

<p>A BS in Human Development and Family Science with a concentration in Child Development degree online opens doors to many career opportunities, including:
<ul>
	<li>early care and education professionals</li>
	<li>parent educators</li>
	<li>child advocates</li>
	<li>early interventionists</li>
</ul></p>

<p>Check out how you can get started by:
<ul>
	<li>Reviewing our <a href="https://online.msstate.edu/hdfs#program-structure">program curriculum</a> information</li>
	<li>Requesting more information</li>
</ul></p>

<p>Students can transfer applicable and approved coursework from accredited community colleges and/or four-year institutions into the program as well.</p>

<p>If you have any questions or concerns, please contact me. I am ready to help.</p>
@endsection

@section('signature')
	@include('signatures.dknox')
@endsection

@section('apply')
	@include('common.apply')
@endsection