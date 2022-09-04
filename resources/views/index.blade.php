@extends('base')
@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-12 text-center my-4">
                <h1 class="display-1">Happy Doctor's Day</h1>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header text-center h4 bg-secondary fw-bolder">patient Authentication</div>
                    <div class="card-body d-flex">
                        <a href="{{route("patientLogin")}}" class="btn btn-success w-50 mx-2 my-3 py-3 fw-bolder">Patient Login</a>
                        <a href="{{route("patientSingup")}}" class="btn btn-dark  w-50 mx-2 my-3 py-3 fw-bolder">Create An Account</a>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header text-center h4  bg-secondary fw-bolder">Doctor Login</div>
                    <div class="card-body d-flex">
                        <a href="{{route("doctorLogin")}}" class="btn btn-danger w-50 mx-2 my-3 py-3 fw-bolder">Doctor Login</a>
                        <a href="{{route("doctorSingup")}}" class="btn btn-dark  w-50 mx-2 my-3 py-3 fw-bolder">Create An Account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection