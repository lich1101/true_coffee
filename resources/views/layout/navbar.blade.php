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
