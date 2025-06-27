@extends('layouts.admin')

@section('content')
<div class="container bg-white p-4 mt-4 rounded shadow-sm">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="mb-0">Add a Book</h3>
        <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-secondary">
            <i class="fas fa-arrow-left me-1"></i> Back to List
        </a>
    </div>

    <form method="post" action="{{ route('admin.store-book') }}">
        @csrf
        @method('post')

        <div class="row g-3">
            <div class="col-md-6">
                <label for="title" class="form-label fw-semibold">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>

            <div class="col-md-6">
                <label for="author" class="form-label fw-semibold">Author</label>
                <input type="text" class="form-control" id="author" name="author" required>
            </div>

            <div class="col-md-6">
                <label for="isbn" class="form-label fw-semibold">ISBN</label>
                <input type="text" class="form-control" id="isbn" name="isbn" required>
            </div>

            <div class="col-md-6">
                <label for="published_date" class="form-label fw-semibold">Published Date</label>
                <input type="date" class="form-control" id="published_date" name="published_date" required>
            </div>

            <div class="col-md-6">
                <label for="copies_available" class="form-label fw-semibold">Copies Available</label>
                <input type="number" class="form-control" id="copies_available" name="copies_available" step="1" required>
            </div>

            <div class="col-12">
                <label for="description" class="form-label fw-semibold">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>
        </div>

        <div class="mt-4 d-flex justify-content-end gap-2">
            <button type="submit" class="btn btn-success">
                <i class="fas fa-plus me-1"></i> Create
            </button>
            <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-secondary">Cancel</a>
        </div>
    </form>
</div>
@endsection
