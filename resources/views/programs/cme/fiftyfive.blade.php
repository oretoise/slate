@extends('layouts.mjml')

@section('content')
<h3>Day 55 - Subject: The Bulldog family wants you!</h3>

<p>Dear @@{{First}},</p>

{% if @@{{program}} == 'PhD Computational Engineering' %}
<p>Thank you again for your interest in the Doctor of Philosophy in Computational Engineering at Mississippi State Online. We just wanted to touch base with you again to see if you had any follow up questions.</p>
{% endif %}

{% if @@{{program}} == 'Master of Science in Computational Engineering' %}
<p>Thank you again for your interest in the Master of Science in Computational Engineering at Mississippi State Online. We just wanted to touch base with you again to see if you had any follow up questions.</p>
{% endif %}

<img class="img-center" width=750px src="https://goto.msstate.edu/www/images/Distance/programs/cme/cme_2.jpg" />

{% if @@{{program}} == 'Master of Science in Computational Engineering' %}
<p>You may start the Master of Science in Computational Engineering program at the beginning of the fall, spring or summer semester.  The sooner you complete your <a href="https://apply.grad.msstate.edu/">application</a>, the closer you are to reaching your educational goal!</p>
{% endif %}

{% if @@{{program}} == 'PhD Computational Engineering' %}
<p>You may start the Doctor of Philosophy in Computational Engineering program at the beginning of the fall, spring or summer semester.  The sooner you complete your <a href="https://apply.grad.msstate.edu/">application</a>, the closer you are to reaching your educational goal!</p>
{% endif %}

<p>All the best,</p>
@endsection

@section('signature')
	@include('signatures.mwolfe_swann')
@endsection

@section('apply')
	@include('common.apply')
@endsection