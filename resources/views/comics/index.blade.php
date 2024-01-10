@extends('leyout/app')
@section('title', 'products')

@section('content')
<div class="my-3">
    <h2>products</h2>

    <div>
        <form action="{{route('comics.index')}}" method="get">
        <select name="search" id="search">
            <option value="">all</option>
            <option value="comic book">comic book</option>
            <option value="graphic novel">graphic novel</option>
        </select>
        <button type="submit">Cerca</button>
        </form>
    </div>

    @if(session()->has('message'))
        <div style="background-color: rgb(221, 69, 69)">
            {{session('message')}}
        </div>
    @endif

    <div class="row my-3">
        @foreach ($products as $key => $product)
            <div class="col-12 col-md-4 col-lg-3">
                <div class="card mb-3">
                    <a href="{{route('comics.show', $product)}}">
                        <img style="width: 100%" src="{{$product['thumb']}}" alt="img product">
                    <a href="{{route('comics.edit', $product)}}">cambia</a>
                    </a>
                    <form action="{{route('comics.destroy', $product)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="cancel-button" data-item-title="{{$product->title}}">rimuovi</button>
                    </form>
                </div>
                
            </div>
        @endforeach
    </div>
</div>
@include('partials.modal_delete');
@endsection