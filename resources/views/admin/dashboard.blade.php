@extends('layouts.admin')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h3 class="mb-0">Manage Books</h3>
    <a href="{{ route('admin.create-book') }}" class="btn btn-success">
        <i class="fas fa-plus me-1"></i> Add Book
    </a>
</div>

    <div class="table-responsive">
        <table class="table table-hover table-bordered align-middle">
            <thead class="table-dark text-center">
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
            </thead>
            <tbody>
                @foreach($books as $book)
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->isbn }}</td>
                    <td>{{ $book->published_date }}</td>
                    <td>{{ $book->copies_available }}</td>
                    <td>{{ $book->description }}</td>
                    <td class="text-center">
                        <a href="{{ route('admin.edit-book', ['book' => $book]) }}" class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i>
                        </a>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete({{ $book->id }})">
                            <i class="fas fa-trash"></i>
                        </button>

                        <form id="delete-form-{{ $book->id }}" method="post" action="{{ route('admin.delete-book', ['book' => $book]) }}" class="d-none">
                            @csrf
                            @method('delete')
                        </form>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-3 d-flex justify-content-center">
            {{ $books->links('pagination::bootstrap-5') }}
        </div>

    </div>

@endsection
