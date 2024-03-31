@extends('layouts\main')

@section('content')
<div class="container">
    <h1 class="py-5 text-center">{{ $item->name }}</h1>

    <div class="row justify-content-around">
        <div class="col-12 col-md-4">
            <img src="" class="placeholder" height="100%" width="100%">
        </div>
        <div class="col-md-6">
            <h1 class="">{{ $item->name }}</h1>
            <span class="text-muted">Category: </span> <a href="/category/{{ $item->category->slug }}"><span class="badge rounded-pill text-bg-secondary">{{ $item->category->name }}</span></a>
            <p class="my-2">{!! $item->description !!}</p>
            <a href="" type="button" class="btn btn-primary mt-3" >Buy</a>
        </div>
    </div>
</div>
@endsection