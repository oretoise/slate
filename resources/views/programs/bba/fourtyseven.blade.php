@extends('layouts.responsive')

@section('content')
<h3>Day 47 - Subject: Let's get social!</h3>
@include('common.social')
@endsection

@section('signature')
    @include('signatures.mjimerson')
@endsection

@section('apply')
    @include('programs.bba.apply')
@endsection