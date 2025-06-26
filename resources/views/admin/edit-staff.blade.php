@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit staff</h1>
    <form method="post" action="{{route('admin.update-staff', ['staff' => $staff])}}">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="first_name" class="form-label">First Name</label>
            <input type="text" class="form-control" id="first_name" name="first_name" value="{{$staff->first_name}}" required>
        </div>
        <div class="mb-3">
            <label for="last_name" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="last_name" name="last_name" value="{{$staff->last_name}}" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{$staff->email}}" required>
        </div>

        <div class="mb-3">
            <label for="phone_number" class="form-label">Phone Number</label>
            <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{$staff->phone_number}}" required>
        </div>

        <div class="mb-3">
            <label for="gender" class="form-label">{{ __('Gender') }}</label>
            <div class="col-md-2">
                <select id="gender" class="form-control" name="gender" value="{{$staff->gender}}" required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
            </div>
        </div>
        
        <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="number" class="form-control" id="age" name="age" value="{{$staff->age}}" required>
        </div>
        <div class="mb-3">
            <label for="position" class="form-label">Position</label>
            <input type="text" class="form-control" id="position" name="position" value="{{$staff->position}}" required>
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
        <a href="{{ route('admin.staff-list') }}" class="btn btn-secondary">Back to List</a>
    </form>
</div>
@endsection
