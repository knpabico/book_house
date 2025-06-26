@extends('layouts.app')

@section('content')
<div class="container mt-2">
    <h3>Add a Book</h3>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card mt-4">
                <div class="card-body border dark-rounded">
                    <form method="post" action="{{route('admin.store-book')}}">
                        @csrf
                        @method('post')
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>
                        <div class="mb-3">
                            <label for="author" class="form-label">Author</label>
                            <input type="text" class="form-control" id="author" name="author" required>
                        </div>
                        <div class="mb-3">
                            <label for="isbn" class="form-label">ISBN</label>
                            <input type="text" class="form-control" id="isbn" name="isbn" required>
                        </div>
                        <div class="mb-3">
                            <label for="published_date" class="form-label">Published Date</label>
                            <input type="date" class="form-control" id="published_date" name="published_date" required>
                        </div>
                        <div class="mb-3">
                            <label for="copies_available" class="form-label">Copies Available</label>
                            <input type="number" class="form-control" id="copies_available" name="copies_available" step="0.01" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <input type="text" class="form-control" id="description" name="description" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Create</button>
                        <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">Back to List</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
