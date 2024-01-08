@extends('leyout/app')
@section('title', 'products')

@section('content')
<div class="my-3">
    <h2>products</h2>
    <div class="row my-3">
        <div class="col-6">
            <div class="card">
                <img src="{{$product['thumb']}}" alt="img product">
            </div>
        </div>
    </div>
</div>
@endsection