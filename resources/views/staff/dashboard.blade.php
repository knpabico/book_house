@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Welcome Staff!</h1>
    <div class="px-1 pt-1">
        <form method="get" action="{{route('staff.student-list')}}">
            <input type="submit" value="Student" />
        </form>
        <table class="table table-striped table-bordered" style="border: 2px solid black;">
            <thead class="table-light">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">ISBN</th>
                    <th scope="col">Published Date</th>
                    <th scope="col">Copies Available</th>
                    <th scope="col">Description</th>
                    <th scope="col" colspan="2">Actions</th>
                </tr>

                @foreach($books as $book)
                    <tr>
                        <td>{{$book->id}}</td>
                        <td>{{$book->title}}</td>
                        <td>{{$book->author}}</td>
                        <td>{{$book->isbn}}</td>
                        <td>{{$book->published_date}}</td>
                        <td>{{$book->copies_available}}</td>
                        <td>{{$book->description}}</td>
                        <td>
                            <a href="{{route('staff.edit-book', ['book' => $book])}}">Edit</a>
                        </td>
                        
                    </tr>
                @endforeach
        </table>
    </div>
</div>
@endsection
