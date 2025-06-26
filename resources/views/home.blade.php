<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookHouse | Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body class="bg-light d-flex align-items-center justify-content-center vh-100">

    <div class="text-center px-4">
        <!-- <h1 class="display-4 fw-bold mb-3">Welcome to BookHouse</h1> -->
        <div style="text-align: center;">
            <img src="{{ asset('images/logo.png') }}" alt="My Photo" style="width: 350px; height: auto; object-fit: cover; object-position: center;">
        </div>

        <p class="lead mb-4">A simple and efficient book management system to organize your library, track borrowers, and streamline book lending.</p>

        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
            <a href="{{ route('login') }}" class="btn btn-primary btn-lg px-4" style="background-color: #545454;">Login</a>
            <a href="{{ route('register') }}" class="btn btn-outline-primary btn-lg px-4" style="background-color: #5271ff;" >Register</a>
        </div>
    </div>

</body>
</html>
