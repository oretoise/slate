@extends('layouts.responsive')

@section('content')
    <p>Listing of plans</p>
    {{ $program }}
@endsection

@section('signature')
    @include('signatures.sig')
@endsection

@section('apply')
    @include('programs.test.apply')
@endsection
