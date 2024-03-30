@extends('includes.navbar')

@section('nav-account')
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
@endsection