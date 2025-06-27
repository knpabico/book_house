@extends('layouts.student')

@section('content')
<div class="container bg-white p-4 mt-4 rounded shadow-sm">

    <div class="row justify-content-center g-4">
        @foreach($books as $book)
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <div class="card h-100 shadow-sm border-0">
                    <img src="{{ asset('images/book.jpg') }}" class="card-img-top" alt="Book Cover" style="height: 220px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <h6 class="card-title mb-1">{{ $book->title }}</h6>
                        <p class="text-muted small mb-1">by {{ $book->author }}</p>
                        <p class="mb-2 small"><strong>ISBN:</strong> {{ $book->isbn }}</p>
                        <p class="card-text small flex-grow-1">{{ Str::limit($book->description, 80) }}</p>
                        <div class="d-flex justify-content-between align-items-center mt-auto">
                            <span class="badge {{ $book->status === 'Available' ? 'bg-success' : 'bg-danger' }}">
                                {{ ucfirst($book->status) }}
                            </span>
                            @if($book->status === 'Available')
                                <form method="POST" action="">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-primary px-2 py-0">
                                        Borrow
                                    </button>
                                </form>
                            @else
                                <button class="btn btn-sm btn-secondary px-2 py-0" disabled>--</button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</div>
@endsection
