@extends('base')
@section('content')

<div class="container mt-3">
    <div class="row">
        <div class="col-5 mx-auto">
            <div class="card">
                <div class="card-header text-center fw-bolder h4 bg-secondary">Patient (Singup)</div>
                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="fw-bolder">Name</label>
                            <input type="text" name="name" class="form-control" value="{{old('name')}}">
                            @error('name')
                                <p class="small">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="fw-bolder">Address</label>
                            <input type="text" name="address" class="form-control" value="{{old('address')}}">
                            @error('address')
                                <p class="small">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="fw-bolder">Contact</label>
                            <input type="text" name="contact" class="form-control" value="{{old('contact')}}">
                            @error('contact')
                                <p class="small">{{$message}}</p>
                            @enderror
                        </div>
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
                            <input type="submit" value="Patient Create An Account" class="btn btn-success w-100">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection