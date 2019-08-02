@extends('layouts.mjml')

@section('content')
<h3>Day 3 - Subject: Who should apply for the VCP?</h3>
<p>Dear @@{{First}},</p>

<img class="img-right" src="https://goto.msstate.edu/www/images/Distance/programs/veterans/veterans_1.png" />

<p>As more military personnel transition to civilian life, the demand continues for qualified individuals to help these new veterans understand and receive the benefits to which they are entitled.</p>

<p>Would you like to gain the knowledge and expertise to support and assist these veterans?</p>

<p>The online Veterans' Certificate Program is for the following:</p>
<ul>
    <li>Individuals who support veterans.</li>
    <li>Those who need training relevant to veterans' specific needs.</li>
    <li>Employees who are seeking advancement in any governmental agency that deals with veterans.</li>
    <li>Undergraduate students seeking an interdisciplinary emphasis area for the <a href="https://online.msstate.edu/bsis/">Bachelor of Science in Interdisciplinary Studies (BSIS)</a> online degree program.</li>
</ul>

<p>Ready to apply? I will be happy to assist you or answer any questions that you have.</p>
<p>Thanks,</p>
@endsection

@section('signature')
	@include('signatures.vtate')
@endsection

@section('apply')
	@include('common.apply')
@endsection