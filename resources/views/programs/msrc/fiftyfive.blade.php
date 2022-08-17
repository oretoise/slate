@extends('layouts.mjml')

@section('content')
<h3>Day 55 - Subject: Orientation for Online Students</h3>
<p>Dear @@{{First}},</p>

<p>If you're worried about how you will complete online coursework or how to navigate your courses, don't fret!</p>
<p>Upon admission, Mississippi State University offers a non-credit <a href="https://online.msstate.edu/orientation/">Online@State Orientation</a> course to new distance students at no charge! This course allows students to become familiar with the online learning process at MSU before their courses begin.</p>
<p>Of course, I am also here whenever you have a question.</p>
<p>I look forward to hearing from you!</p>
@endsection

@section('signature')
	@include('signatures.arijal')
@endsection

@section('apply')
	@include('common.apply')
@endsection