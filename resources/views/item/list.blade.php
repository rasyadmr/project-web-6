@extends('layouts.main')

@section('content')
<div class="container">
    @if ($title !== "All Items")
    <div class="back-link mt-3">
        <a href="/item">
            <span class="fa fa-arrow-circle-o-left"></span> All Items
        </a>
    </div>
    @endif

    <div class="row align-items-center py-3 justify-content-between">
        <div class="col-md-6">
            <h1>{{ $title }}</h1>
        </div>
        <div class="col-md-4 text-end d-flex align-items-center">
            <form class="input-group">
                <input type="text" class="form-control" placeholder="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            
        </div>
    </div>
    <hr/>

    @if ($items->count())
    <h3>Top Item</h3>
    <div class="card mb-3">
        <img src="https://source.unsplash.com/random/1200x400/?{{ $items[0]->category->name }}" class="card-img-top" alt="{{ $items[0]->category->name }}" style="max-height: 50vh;">
        <div class="card-body text-center">
            <h5 class="card-title">{{ $items[0]->name }}</h5>
            <a href="/store/{{ $items[0]->user->username }}" class="text-decoration-none">{{ $items[0]->user->name }}</a>
            <p class="card-text text-muted">${{ $items[0]->price }}</p>
            {{-- <p class="card-text">{!! $items[0]->description !!}</p> --}}
        </div>
        <a type="button" class="btn btn-primary m-2" href="/item/{{ $items[0]->slug }}">Baca selanjutnya</a>
    </div>

    <h3 class="mt-4">More Items</h3>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
            @foreach ($items->skip(1) as $item)
            <div class="col">
                <div class="card" style="height: 55vh">
                    <img src="https://source.unsplash.com/random/800x600/?{{ $item->category->name }}" class="card-img-top" alt="{{ $item->category->name }}">
                    <div class="card-body">
                        <a href="/store/{{ $item->user->username }}" class="text-decoration-none">{{ $item->user->name }}</a>
                        <h5 class="card-title mb-0 text-truncate">{{ $item->name }}</h5>
                        <p class="card-text text-muted">${{ $item->price }}</p>
                    </div>
                    <a type="button" class="btn btn-primary m-2" href="/item/{{ $item->slug }}">Baca selanjutnya</a>
                </div>
            </div>
            @endforeach
        </div>
    @else
        <p class="text-center text-muted fs-4">No item found!</p>
    @endif
</div>
@endsection