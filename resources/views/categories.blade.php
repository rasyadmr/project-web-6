@extends('layouts.main')

@section('content')
<div class="container">
    <h1 class="fs-2 text-center my-4">Categories</h1>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        @foreach ($categories as $category)
            <div class="col">
                <a href="/category/{{ $category->slug }}" class="text-decoration-none">
                    <div class="card h-100">
                        <div class="card-body row">
                            <div class="col-2 col-md-3">
                                <img src="images/rasyadmr.jpg" class="rounded-circle" height="50px" width="50px">
                            </div>
                            <div class="col card-title align-middle d-flex m-0">
                                <h4 class="m-0 p-0 my-auto">{{ $category->name }}</h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        
        @endforeach
    </div>
</div>
@endsection
