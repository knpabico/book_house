@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>List of Students</h1>
    <div class="px-1 pt-1">
        <table class="table table-striped table-bordered" style="border: 2px solid black;">
            <thead class="table-light">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Age</th>
                    <th scope="col">Student ID</th>
                    <th scope="col">Borrow Status</th>
                    <th scope="col">Actions</th>
                </tr>

                @foreach($students as $student)
                    <tr>
                        <td>{{$student->id}}</td>
                        <td>{{$student->first_name}}</td>
                        <td>{{$student->last_name}}</td>
                        <td>{{$student->email}}</td>
                        <td>{{$student->phone_number}}</td>
                        <td>{{$student->gender}}</td>
                        <td>{{$student->age}}</td>
                        <td>{{$student->student_id}}</td>
                        <td>{{$student->borrow_status}}</td>
                        <td>
                            <form method="post" action="{{route('admin.delete-student', ['student' => $student])}}">
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

