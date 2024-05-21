<nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
    <div class="container-fluid">
        <div class="col-lg-3">
            <a class="navbar-brand d-lg-flex align-items-center" href="#">
                <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiPL4h_BLG8D3mwx34bIUWrGV7_Xau6_ltCjqkLzOV13hWasAYdCGT-2MRjXxhy-Vpnh8_p3BTVzhQ9bgfSvNqr0yBWecYlyuqPS4Jihbyg6_l4Z7pxMEhzcnNMY-gGbS05icNC0uFUkB7-d807XVg2eSQEuxZKm3pD2YA6ulJ1LcWZBL8wT_4bGA/w400-h400/PDI%20Perjuangan.png" alt="Logo" width="35" height="35" class="d-inline-block align-text-top">
                <span class="fs-4">Development</span>
            </a>
        </div>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navToggler" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse d-lg-flex" id="navToggler">
            <ul class="navbar-nav col-lg-8 justify-content-lg-center">
                <li class="nav-item">
                    <a class="nav-link @if ($title === "Main") 
                    active
                    @endif" href="{{ url('/') }}">Main</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if ($title === "Home") 
                    active
                    @endif" href="{{ url('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if ($title === "All Items") 
                    active
                    @endif" href="/item">Items</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Others</a>
                    <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item" href="/categories">Category</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Dummy</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Dummy</a>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <a class="dropdown-item" href="#">Dummy</a>
                    </li>
                    </ul>
                </li>
            </ul>
            <div class="d-lg-flex col-lg-4 justify-content-lg-end">
                @if (@session('user'))
                    <div class="dropdown text-end">
                        <a href="#" class="d-block-inline link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="@yield('image')" alt="" width="30" height="30" class="rounded-circle">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end text-small" style="">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Log out</a></li>
                        </ul>
                    </div>
                @else
                    <a href="/login"><button class="btn btn-outline-success mx-1">Log In</button></a>
                    <a href="/register"><button class="btn btn-success mx-1">Create an account</button></a>
                @endif
            </div>
        </div>
    </div>
</nav>