<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TrueCoffee Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            min-height: 100vh;
            flex-direction: column;
            margin: 0;
        }
        .navbar {
            width: 100%;
            background-color: #fff;
            border-bottom: 1px solid #e9ecef;
            padding: 10px 20px;
            position: fixed;
            top: 0;
            z-index: 1000;
        }
        .sidebar {
            height: 100vh;
            position: fixed;
            top: 56px; /* height of the navbar */
            width: 235px;
            padding-top: 20px;
            overflow-y: auto;
        }
        .sidebar a {
            text-decoration: none;
            font-size: 18px;
            color: #000;
            display: block;
            padding: 15px 20px;
        }
        .sidebar a:hover {
            background-color: #007bff;
            color: #fff;
        }
        .main-content {
            background-color: #f8f9fa;
            margin-left: 250px;
            padding: 20px;
            padding-top: 76px; /* height of the navbar + extra padding */
            flex: 1;
        }
        .card {
            border: none;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
    </style>
</head>
<body>

@include('layout.navbar')

@include('layout.sidebar')


<div class="main-content">
    <div class="container-fluid mt-4">
        <div class="row mx-auto">
        </div>

        @yield('content')
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>
