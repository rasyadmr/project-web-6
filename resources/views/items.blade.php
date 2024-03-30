@extends('layouts\home')

@section('image')
    {{ asset($user['image']) }}
@endsection

@section('content')
<div class="container">
    <h1 class="py-5 text-center">Store page</h1>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
        @foreach ($items as $item)
        <div class="col">
            <div class="card h-200">
                <img src="" class="card-img-top placeholder" alt="" height="200"/>
                <div class="card-body">
                    <h5 class="card-title mb-0">{{ $item['name'] }}</h5>
                    <p class="card-text text-muted">${{ $item['price'] }}</p>
                    <p class="card-text">{{ $item['description'] }}</p>
                </div>
                <a type="button" class="btn btn-primary m-2" href="/item/{{ $item['id'] }}">Baca selanjutnya</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection