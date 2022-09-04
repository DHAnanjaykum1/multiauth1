@extends('base')
@section('content')

<div class="container mt-3">
    <div class="row">
        <div class="col-5 mx-auto">
            <div class="card">
                <div class="card-header text-center fw-bolder h4 bg-secondary">Patient Login</div>
                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="fw-bolder">Email</label>
                            <input type="text" name="email" class="form-control" value="{{old('email')}}">
                            @error('email')
                                <p class="small">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="fw-bolder">Password</label>
                            <input type="text" name="password" class="form-control" value="{{old('password')}}">
                            @error('password')
                                <p class="small">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="submit" value="Patient Login" class="btn btn-success w-100">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection