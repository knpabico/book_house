@extends('layouts.app')
<style>
    body {
        background: url("{{ asset('images/dash-bg.jpg') }}") no-repeat center center fixed;
        background-size: cover;
        position: relative;
    }

    body::before {
        content: "";
        position: absolute;
        top: 0; left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(255, 255, 255, 0.6);
        z-index: 0;
    }
</style>
@section('content')
<div class="container" style="position: relative; z-index: 1; padding-top: 5px; padding-bottom: 5px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-white bg-dark">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row mb-3">
                            <div class="col">
                                <label for="first_name" class="form-label text-white">{{ __('First Name') }}</label>
                                <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror"
                                    name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus
                                    style="background-color:rgb(29, 29, 29); border: 1px solid rgb(140, 140, 140); color: white;">
                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col">
                                <label for="last_name" class="form-label text-white">{{ __('Last Name') }}</label>
                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror"
                                    name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus
                                    style="background-color:rgb(29, 29, 29); border: 1px solid rgb(140, 140, 140); color: white;">
                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="row mb-3">
                            <label for="email" class="form-label text-white">{{ __('Email Address') }}</label>

                            <div class="col">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" style="background-color:rgb(29, 29, 29); border: 1px solid rgb(140, 140, 140); color: white;">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <label for="phone_number" class="form-label text-white">{{ __('Phone Number') }}</label>
                                <input id="phone_number" type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" style="background-color:rgb(29, 29, 29); border: 1px solid rgb(140, 140, 140); color: white;">

                                @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="gender" class="form-label text-white">{{ __('Gender') }}</label>
                                <select id="gender" class="form-control @error('gender') is-invalid @enderror"
                                    name="gender" value="{{ old('gender') }}" required autocomplete="gender"
                                    style="background-color:rgb(29, 29, 29); border: 1px solid rgb(140, 140, 140); color: white;">
                                    <option value="">Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col">
                                <label for="age" class="form-label text-white">{{ __('Age') }}</label>
                                <input id="age" type="text" class="form-control @error('age') is-invalid @enderror"
                                    name="age" value="{{ old('age') }}" required autocomplete="age" autofocus
                                    style="background-color:rgb(29, 29, 29); border: 1px solid rgb(140, 140, 140); color: white;">
                                @error('age')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="student_id" class="form-label text-white">{{ __('Student ID') }}</label>

                            <div class="col">
                                <input id="student_id" type="text" class="form-control @error('student_id') is-invalid @enderror" name="student_id" value="{{ old('student_id') }}" required autocomplete="student_id" style="background-color:rgb(29, 29, 29); border: 1px solid rgb(140, 140, 140); color: white;" >
                                

                                @error('student_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="form-label text-white">{{ __('Password') }}</label>

                            <div class="col">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" style="background-color:rgb(29, 29, 29); border: 1px solid rgb(140, 140, 140); color: white;">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="form-label text-white">{{ __('Confirm Password') }}</label>

                            <div class="col">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" style="background-color:rgb(29, 29, 29); border: 1px solid rgb(140, 140, 140); color: white;">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col text-center">
                                <button type="submit" class="btn btn-primary" style="background-color: #008344; border: 2px solid #008344;">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
