@extends('layouts.app')

@section('title', 'Administration')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Communication Plans</div>

                <div class="card-body">
                    <div class="alert alert-success"></div>

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
                                        <button type="submit" onclick="compile('{{$plan}}')" class="btn btn-info">Compile</button>
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

<script>
    function compile(plan) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState = 4 && this.status == 200) {
                // Set success message.
                $("div .alert").html(this.responseText);
				console.log(this.responseText);
                $("div .alert").show();
            }
        }

        xhttp.open("GET", "/slate/compile/" + plan, true);
        xhttp.send();
    }
</script>
@endsection
