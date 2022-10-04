@extends('layouts.mjml')

@section('content')
<h3>Day 55 - Subject: The Bulldog family wants you!</h3>
<p>Dear @@{{First}},</p>
<p>Thank you again for your interest in the Master’s in Plant Soil Sciences with a concentration in Horticulture at Mississippi State Online. We just wanted to touch base with you again to see if you had any follow up questions. </p>

<p>You may start the Master’s in Plant Soil Sciences with a concentration in Horticulture program at the beginning of the fall, spring or summer semester.  The sooner you complete your application, the closer you are to reaching your educational goal!  </p>

<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.mwolfe')
@endsection

@section('apply')
	@include('common.apply')
@endsection