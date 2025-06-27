<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BOOKHOUSE') }}</title>

    <!-- Fonts & Icons -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="bg-dark">
    <nav class="navbar navbar-dark bg-dark sticky-top">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center gap-3">
                <button class="btn btn-outline-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
                    <i class="fas fa-bars"></i>
                </button>

                @auth
                    <span class="text-white fs-5 mb-0">Welcome, {{ Auth::user()->first_name }}!</span>
                @endauth
            </div>

            <a class="navbar-brand" href="{{ url('/redirect') }}">
                <img src="{{ asset('images/logo3.png') }}" alt="My Photo" class="d-block" style="width: 150px; height: auto; object-fit: cover; object-position: top left;">
            </a>
        </div>
    </nav>

    <!-- Sidebar -->
    <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasSidebar" aria-labelledby="offcanvasSidebarLabel" style="width: 250px;">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasSidebarLabel">
                <img src="{{ asset('images/logo3.png') }}" alt="Logo" style="width: 150px;">
            </h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="list-unstyled">
                <li>
                    <h6 class="text-white">Manage</h6>
                    <ul class="list-unstyled ps-3">
                        <li><a href="{{route('student.dashboard')}}" class="text-white d-block">Book</a></li>
                    </ul>
                </li>
                <li class="mt-3">
                    <h6 class="text-white">Account</h6>
                    <ul class="list-unstyled ps-3">
                        <li><a href="#" class="text-white d-block">Profile</a></li>
                        @auth
                            <li>
                                <a class="text-white d-block" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Sign out
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        @endauth
                        @guest
                            <li><a href="{{ route('login') }}" class="text-white d-block">Login</a></li>
                            <li><a href="{{ route('register') }}" class="text-white d-block">Register</a></li>
                        @endguest
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <!-- Main Content -->
    <main class="py-4 px-4 bg-light min-vh-100">
        @yield('content')
    </main>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmDelete(bookId) {
            Swal.fire({
                title: 'Are you sure?',
                text: "This will permanently delete the book.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#dc3545',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Yes'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById(`delete-form-${bookId}`).submit();
                }
            });
        }
    </script>
</body>
</html>
