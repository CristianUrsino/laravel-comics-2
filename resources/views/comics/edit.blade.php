@extends('leyout/app')
@section('title', 'products edit')

@section('content')
<div class="my-3">
    <h2>products</h2>
    <div class=" my-3">
        <form action="{{route( 'comics.update', $comic)}}" method="post">
            @csrf
            @method('PUT')
            <input class="form-controll" type="text" id="title" name="title" placeholder="inserisci titolo" value="{{old('title', $comic->title)}}">
            <input class="form-controll" type="text" id="price" name="price" placeholder="inserisci titolo" value="{{old('price', $comic->price)}}">
            <input class="form-controll" type="date" id="sale_date" name="sale_date" placeholder="inserisci titolo" value="{{old('sale_date', $comic->sale_date)}}">
            <input class="form-controll" type="text" id="series" name="series" placeholder="inserisci titolo" value="{{old('series', $comic->series)}}">
            <input class="form-controll" type="text" id="type" name="type" placeholder="inserisci titolo" value="{{old('type', $comic->type)}}">

            <button>invia</button>

        </form>
    </div>
</div>
@endsection