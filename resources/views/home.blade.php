<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookHouse | Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

    <style>
        body {
            background: url("{{ asset('images/dash-bg.jpg') }}") no-repeat center center fixed;
            background-size: cover;
            position: relative;
        }

        body::before {
            content: "";
            position: absolute;
            top: 0; left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.6); 
            z-index: 0;
        }

        .content {
            position: relative;
            z-index: 1;
        }
    </style>
</head>
<body class="bg-light d-flex align-items-center justify-content-center vh-100">

    <div class="content text-center px-4">
        <div style="text-align: center;">
            <img src="{{ asset('images/logo2.png') }}" alt="My Photo" style="width: 350px; height: auto; object-fit: cover; object-position: center;">
        </div>

        <p class="lead mb-4">Lend your needed books today!</p>

        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
            <a href="{{ route('login') }}" class="btn btn-primary btn-lg px-4" style="background-color: #545454; border: 2px solid #545454;">Login</a>
            <a href="{{ route('register') }}" class="btn btn-primary btn-lg px-4" style="background-color: #008344; border: 2px solid #008344;">Register</a>
        </div>
    </div>

</body>
</html>
