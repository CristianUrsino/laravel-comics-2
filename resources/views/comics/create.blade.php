@extends('leyout/app')
@section('title', 'products create')

@section('content')
<div class="my-3">
    <h2>products</h2>
    <div class=" my-3">
        <form action="{{route( 'comics.store')}}" method="post">
            @csrf
            <input class="form-controll" type="text" id="title" name="title" placeholder="inserisci titolo">
            <input class="form-controll" type="text" id="price" name="price" placeholder="inserisci titolo">
            <input class="form-controll" type="date" id="sale_date" name="sale_date" placeholder="inserisci titolo">
            <input class="form-controll" type="text" id="series" name="series" placeholder="inserisci titolo">
            <input class="form-controll" type="text" id="type" name="type" placeholder="inserisci titolo">

            <button>invia</button>

        </form>
    </div>
</div>
@endsection