@extends('layouts.admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h3 class="mb-0">Manage Staffs</h3>
    <a href="{{ route('admin.create-staff') }}" class="btn btn-success">
        <i class="fas fa-plus me-1"></i> Add Staff
    </a>
</div>

<div class="table-responsive">
        <table class="table table-hover table-bordered align-middle">
            <thead class="table-dark text-center">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Age</th>
                    <th scope="col">Position</th>
                    <th scope="col">Status</th>
                    <th scope="col" colspan="2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($staffs as $staff)
                <tr>
                    <td>{{$staff->id}}</td>
                    <td>{{$staff->first_name}}</td>
                    <td>{{$staff->last_name}}</td>
                    <td>{{$staff->email}}</td>
                    <td>{{$staff->phone_number}}</td>
                    <td>{{$staff->gender}}</td>
                    <td>{{$staff->age}}</td>
                    <td>{{$staff->position}}</td>
                    <td>{{$staff->status}}</td>
                    <td class="text-center">
                        <a href="{{route('admin.edit-staff', ['staff' => $staff])}}" class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i>
                        </a>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete({{ $staff->id }})">
                            <i class="fas fa-trash"></i>
                        </button>

                        <form id="delete-form-{{ $staff->id }}" method="post" action="{{ route('admin.delete-staff', ['staff' => $staff]) }}" class="d-none">
                            @csrf
                            @method('delete')
                        </form>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-3 d-flex justify-content-center">
            {{ $staffs->links('pagination::bootstrap-5') }}
        </div>

    </div>

@endsection

