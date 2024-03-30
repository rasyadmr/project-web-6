@extends('layouts\home')

<style>
    .carousel-item {
        height: 60vh;
    }
</style>

@section('image')
    {{ $user['image'] }}
@endsection

@section('content')
<div class="container">
    <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4 rounded-circle" src="{{ $user['image'] }}" alt="" height="100"  width="100"/>
        <h1 class="display-5 fw-bold text-body-emphasis">Welcome back, {{ $user['username'] }}</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem placeat nobis, at atque et odio dicta officiis officia quia nihil ut! A quis architecto vero debitis inventore tempore incidunt minima porro quidem? Corporis, expedita ipsam explicabo officiis dicta dolor fugiat sit voluptatem pariatur sunt. Perspiciatis, incidunt iure neque, possimus error aperiam ipsa adipisci quod tempore, aspernatur asperiores quidem suscipit corrupti numquam sit consequatur ducimus at quas odit earum rerum illum magni excepturi. Accusantium saepe magnam facilis nesciunt expedita minus obcaecati, at, assumenda perspiciatis placeat labore, doloremque rerum dolores eos? Sed eligendi consequatur reprehenderit et possimus pariatur delectus? Voluptate, perferendis nam!</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <a type="button" href="/item" class="btn btn-primary btn-lg px-4 gap-3">View Items</a>
                <a type="button" href="/dev" class="btn btn-outline-danger btn-lg px-4">Log out</a>
            </div>
        </div>
    </div>
</div>

@endsection