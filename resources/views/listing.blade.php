@extends('layouts.app')

@section('title', 'Administration')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Communication Plans</div>

                <div class="card-body">
                    @if (\Session::has('success'))
                        <div class="alert alert-success">
                            {{ \Session::get('success') }}
                        </div>
                    @endif

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Compile</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($plans as $plan)
                                <tr>
                                    <td><b>{{ $plan }}</b></td>
                                    <td>
                                        <form method="post" action="{{ action('MJML@compile_plan') }}">
                                            @csrf
                                            <input type="hidden" value="{{ $plan }}" name="program">
                                            <button type="submit" class="btn btn-info">Compile</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
