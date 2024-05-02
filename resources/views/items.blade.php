@extends('layouts\main')

@section('content')
<div class="container">
    @if ($title !== "All Items")
    <div class="back-link mt-3">
        <a href="/item">
            <span class="fa fa-arrow-circle-o-left"></span> All Items
        </a>
    </div>
    @endif

    <h1 class="py-3 text-center">{{ $title }}</h1>
    <hr/>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
        @foreach ($items as $item)
        <div class="col">
            <div class="card" style="height: 70vh">
                <img src="./assets/images/mega.jpg" class="card-img-top" alt="" style="height: 150px;"/>
                <div class="card-body">
                    <a href="/store/{{ $item->user->username }}" class="text-decoration-none">{{ $item->user->name }}</a>
                    <h5 class="card-title mb-0">{{ $item->name }}</h5>
                    <p class="card-text text-muted">${{ $item->price }}</p>
                    <div class="overflow-scroll scrollbar-hide">
                        <p class="card-text">{!! $item->description !!}</p>
                    </div>
                </div>
                <a type="button" class="btn btn-primary m-2" href="/item/{{ $item->slug }}">Baca selanjutnya</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection