@extends('layouts.admin')

@section('content')
<div class="container bg-white p-4 mt-4 rounded shadow-sm">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="mb-0">Edit Staff</h3>
        <a href="{{ route('admin.staff-list') }}" class="btn btn-outline-secondary">
            <i class="fas fa-arrow-left me-1"></i> Back to List
        </a>
    </div>

    <form method="post" action="{{ route('admin.update-staff', ['staff' => $staff]) }}">
        @csrf
        @method('put')

        <div class="row g-3">
            <div class="col-md-6">
                <label for="first_name" class="form-label fw-semibold">First Name</label>
                <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $staff->first_name }}" required>
            </div>

            <div class="col-md-6">
                <label for="last_name" class="form-label fw-semibold">Last Name</label>
                <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $staff->last_name }}" required>
            </div>

            <div class="col-md-6">
                <label for="email" class="form-label fw-semibold">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $staff->email }}" required>
            </div>

            <div class="col-md-6">
                <label for="phone_number" class="form-label fw-semibold">Phone Number</label>
                <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ $staff->phone_number }}" required>
            </div>

            <div class="col-md-6">
                <label for="gender" class="form-label fw-semibold">Gender</label>
                <select id="gender" class="form-select" name="gender" required>
                    <option disabled>Select Gender</option>
                    <option value="Male" {{ $staff->gender == 'Male' ? 'selected' : '' }}>Male</option>
                    <option value="Female" {{ $staff->gender == 'Female' ? 'selected' : '' }}>Female</option>
                    <option value="Other" {{ $staff->gender == 'Other' ? 'selected' : '' }}>Other</option>
                </select>
            </div>

            <div class="col-md-6">
                <label for="age" class="form-label fw-semibold">Age</label>
                <input type="number" class="form-control" id="age" name="age" value="{{ $staff->age }}" required>
            </div>

            <div class="col-md-6">
                <label for="position" class="form-label fw-semibold">Position</label>
                <input type="text" class="form-control" id="position" name="position" value="{{ $staff->position }}" required>
            </div>
        </div>

        <div class="mt-4 d-flex justify-content-end gap-2">
            <button type="submit" class="btn btn-primary" style="background-color: #008344; border 1px solid #008344;">
                <i class="fas fa-save me-1"></i> Save Changes
            </button>
            <a href="{{ route('admin.staff-list') }}" class="btn btn-outline-secondary">Cancel</a>
        </div>
    </form>
</div>
@endsection
