@extends('layouts\main')

@section('content')
<div class="container">
    <div class="back-link mt-3">
        <a href="/categories">
            <span class="fa fa-arrow-circle-o-left"></span> Back to Categories
        </a>
    </div>
    
    <h1 class="mb-4 text-center">Category: {{ $title }}</h1>
    <hr/>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
        @foreach ($items as $item)
        <div class="col">
            <div class="card" style="height: 70vh">
                <img src="https://placehold.co/400x200.png" class="card-img-top placeholder" alt="" height="200"/>
                <div class="card-body">
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