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
            width: 250px;
            background-color: #f8f9fa;
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
            margin-left: 200px;
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

<nav class="navbar navbar-light">
    <a class="navbar-brand" href="#">
        <img src="{{ asset('pictures/logo.png') }}" width="30" height="30" class="d-inline-block align-top" alt="Logo">
        <strong>TrueCoffee Dashboard</strong>
    </a>
    <div class="user-profile">
        <img src="user.png" alt="User" width="30" class="rounded-circle">
        <span>Người dùng</span>
    </div>
</nav>

<div class="sidebar">
    <a href="#">
        <img src="{{ asset('pictures/dashboard.png') }}" width="20" height="20" alt="">
        Trung tâm điều khiển
    </a>
    <a href="#">Sản phẩm</a>
    <a href="#">Người dùng</a>
    <a href="#">Hóa đơn</a>
</div>

<div class="main-content">
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-4">
                <div class="card bg-warning text-white mb-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h2>23</h2>
                                <p>Sản phẩm</p>
                            </div>
                            <div>
                                <i class="fas fa-box fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-danger text-white mb-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h2>1259</h2>
                                <p>Người dùng</p>
                            </div>
                            <div>
                                <i class="fas fa-users fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add more cards here if needed -->
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>
