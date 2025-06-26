@extends('layouts.app')

@section('content')
<div class="container">
    <h1>List of Staffs</h1>
    <div class="px-1 pt-1">
        <form method="get" action="{{route('admin.create-staff')}}">
            <input type="submit" value="Add Staff" />
        </form>
        <table class="table table-striped table-bordered" style="border: 2px solid black;">
            <thead class="table-light">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Age</th>
                    <th scope="col">Position</th>
                    <th scope="col">Status</th>
                    <th scope="col" colspan="2">Actions</th>
                </tr>

                @foreach($staffs as $staff)
                    <tr>
                        <td>{{$staff->id}}</td>
                        <td>{{$staff->full_name}}</td>
                        <td>{{$staff->email}}</td>
                        <td>{{$staff->phone_number}}</td>
                        <td>{{$staff->gender}}</td>
                        <td>{{$staff->age}}</td>
                        <td>{{$staff->position}}</td>
                        <td>{{$staff->status}}</td>
                        <td>
                            <a href="{{route('admin.edit-staff', ['staff' => $staff])}}">Edit</a>
                        </td>
                        <td>
                            <form method="post" action="{{route('admin.delete-staff', ['staff' => $staff])}}">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Delete" />
                            </form>
                        </td>
                    </tr>
                @endforeach
        </table>
    </div>
        
</div>
@endsection

