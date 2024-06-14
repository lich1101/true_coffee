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

<nav class="navbar navbar-light">
    <a class="navbar-brand" href="#">
        <img src="{{ asset('pictures/logo.png') }}" width="30" height="30" class="d-inline-block align-top" alt="Logo">
        <strong>TrueCoffee Dashboard</strong>
    </a>
    <div class="user-profile">
        <div class="dropdown show">
            <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Người dùng
                <img src="{{ asset('pictures/person.png') }}" alt="User" width="30" class="rounded-circle">
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Tai khoan</a>
                <a class="dropdown-item" href="#">Tong quan</a>
                <a class="dropdown-item" href="#">Thoát</a>
            </div>
        </div>
    </div>
</nav>

<div class="sidebar">
    <a href="#">
        <img src="{{ asset('pictures/dashboard.png') }}" width="20" height="20" alt="">
        Trung tâm điều khiển
    </a>
    <a href="#">
        <img src="{{ asset('pictures/product.png') }}" width="20" height="20" alt="">
        Sản phẩm
    </a>
    <a href="#">
        <img src="{{ asset('pictures/User.png') }}" width="20" height="20" alt="">
        Người dùng
    </a>
    <a href="#">
        <img src="{{ asset('pictures/Payroll.png') }}" width="20" height="20" alt="">
        Hóa đơn
    </a>
</div>

<div class="main-content">
    <div class="container mt-4" style="margin: 0">
        <div class="row">
            <div class="col-md-4">
                <div class="card text-dark mb-4" style="background-color: #FFF2DC">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <img src="{{ asset('pictures/Job Oppening.png') }}" width="20" height="20" alt="">
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
                <div class="card text-dark mb-4" style="background-color: #FFEEF1">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <img src="{{ asset('pictures/Total Employees.png') }}" width="20" height="20" alt="">
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
