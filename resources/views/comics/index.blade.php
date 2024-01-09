@extends('leyout/app')
@section('title', 'products')

@section('content')
<div class="my-3">
    <h2>products</h2>
    <div class="row my-3">
        @foreach ($products as $key => $product)
            <div class="col-12 col-md-4 col-lg-3">
                <div class="card mb-3">
                    <a href="{{route('comics.show', $product)}}">
                        <img style="width: 100%" src="{{$product['thumb']}}" alt="img product">
                    <a href="{{route('comics.edit', $product)}}">cambia</a>
                    </a>
                </div>
                
            </div>
        @endforeach
    </div>
</div>
@endsection